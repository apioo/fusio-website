<?php

namespace App\Service;

use App\Service\Slugify;
use App\Table\Blog;
use App\Table\Generated\BlogRow;
use PSX\DateTime\LocalDateTime;
use PSX\Framework\Config\ConfigInterface;

class BlogUpdater
{
    private ConfigInterface $config;
    private Slugify $slugify;
    private Blog $blogTable;

    public function __construct(ConfigInterface $config, Slugify $slugify, Blog $blogTable)
    {
        $this->config = $config;
        $this->slugify = $slugify;
        $this->blogTable = $blogTable;
    }

    public function updateAll(bool $force = false): \Generator
    {
        $dom = new \DOMDocument();
        $dom->load($this->config->get('blog_file'));

        foreach ($dom->getElementsByTagName('entry') as $entry) {
            if (!$entry instanceof \DOMElement) {
                continue;
            }

            $id = $this->getChildElementByName($entry, 'id')?->textContent ?? throw new \RuntimeException('Provided no id');
            $title = $this->getChildElementByName($entry, 'title')?->textContent ?? throw new \RuntimeException('Provided no title');
            $updated = LocalDateTime::parse($this->getChildElementByName($entry, 'updated')?->textContent ?? throw new \RuntimeException('Provided no updated'));
            $summary = $this->getChildElementByName($entry, 'summary')?->textContent ?? throw new \RuntimeException('Provided no summary');
            $content = $this->getChildElementByName($entry, 'content')?->textContent ?? throw new \RuntimeException('Provided no content');
            $categories = $this->getCategories($entry);

            $author = $this->getChildElementByName($entry, 'author') ?? throw new \RuntimeException('Provided no author');
            $authorName = $this->getChildElementByName($author, 'name')?->textContent ?? throw new \RuntimeException('Provided no author name');
            $authorUri = $this->getChildElementByName($author, 'uri')?->textContent ?? throw new \RuntimeException('Provided no author uri');

            $row = $this->blogTable->findOneById($id);
            if (!$row instanceof BlogRow) {
                // the blog entry does not exist create it
                $row = new BlogRow();
                $row->setId($id);
                $row->setTitle($title);
                $row->setTitleSlug($this->slugify->slugify($title));
                $row->setAuthorName($authorName);
                $row->setAuthorUri($authorUri);
                $row->setUpdated($updated);
                $row->setSummary($summary);
                $row->setCategory(implode(',', $categories));
                $row->setContent($content);
                $this->blogTable->create($row);

                yield 'Created ' . $title;
            } else {
                if ($force || $updated > $row->getUpdated()) {
                    // if the update date has change update the entry
                    $row = new BlogRow();
                    $row->setId($id);
                    $row->setTitle($title);
                    $row->setTitleSlug($this->slugify->slugify($title));
                    $row->setAuthorName($authorName);
                    $row->setAuthorUri($authorUri);
                    $row->setUpdated($updated);
                    $row->setSummary($summary);
                    $row->setCategory(implode(',', $categories));
                    $row->setContent($content);
                    $this->blogTable->update($row);

                    yield 'Updated ' . $title;
                }
            }
        }
    }

    protected function getCategories(\DOMElement $element): array
    {
        $terms = [];
        foreach ($element->childNodes as $childNode) {
            if (!$childNode instanceof \DOMElement) {
                continue;
            }

            if ($childNode->nodeName !== 'category') {
                continue;
            }

            $term = trim($element->getAttribute('term'));
            if (empty($term)) {
                continue;
            }

            $terms[] = $this->slugify->slugify($term);
        }

        return $terms;
    }

    private function getChildElementByName(\DOMElement $parent, string $name): ?\DOMElement
    {
        foreach ($parent->childNodes as $childNode) {
            if (!$childNode instanceof \DOMElement) {
                continue;
            }

            if ($childNode->nodeName === $name) {
                return $childNode;
            }
        }

        return null;
    }
}
