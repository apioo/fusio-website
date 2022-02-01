<?php

namespace App\Service;

use App\Slugify;
use App\Table\Blog;
use App\Table\Generated\BlogRow;
use PSX\Data\Payload;
use PSX\Data\Processor;
use PSX\Model\Atom\Atom;
use PSX\Model\Atom\Entry;
use PSX\Model\Atom\Person;

class BlogUpdater
{
    private Processor $processor;
    private string $feedFile;
    private Slugify $slugify;
    private Blog $blogTable;

    public function __construct(Processor $processor, string $feedFile, Slugify $slugify, Blog $blogTable)
    {
        $this->processor = $processor;
        $this->feedFile = $feedFile;
        $this->slugify = $slugify;
        $this->blogTable = $blogTable;
    }

    public function updateAll(bool $force = false): \Generator
    {
        $feed = file_get_contents($this->feedFile);
        /** @var Atom $atom */
        $atom = $this->processor->read(Atom::class, Payload::create($feed, 'application/atom+xml'));

        foreach ($atom->getEntry() as $entry) {
            $row    = $this->blogTable->findOneById($entry->getId());
            $author = $this->getFirstAuthor($entry);

            if (!$author instanceof Person) {
                throw new \RuntimeException(sprintf('No author provided for entry %s', $entry->getId()));
            }

            if (!$row instanceof BlogRow) {
                // the blog entry does not exist create it
                $this->blogTable->create(new BlogRow([
                    'id'         => $entry->getId(),
                    'title'      => $entry->getTitle(),
                    'titleSlug'  => $this->slugify->slugify($entry->getTitle()),
                    'authorName' => $author->getName(),
                    'authorUri'  => $author->getUri(),
                    'updated'    => $entry->getUpdated(),
                    'summary'    => $entry->getSummary()->getContent(),
                    'category'   => implode(',', $this->getCategories($entry)),
                    'content'    => $entry->getContent()->getContent(),
                ]));

                yield 'Created ' . $entry->getTitle();
            } else {
                if ($force || $entry->getUpdated() > $row->getUpdated()) {
                    // if the update date has change update the entry
                    $this->blogTable->update(new BlogRow([
                        'id'         => $entry->getId(),
                        'title'      => $entry->getTitle(),
                        'titleSlug'  => $this->slugify->slugify($entry->getTitle()),
                        'authorName' => $author->getName(),
                        'authorUri'  => $author->getUri(),
                        'updated'    => $entry->getUpdated(),
                        'summary'    => $entry->getSummary()->getContent(),
                        'category'   => implode(',', $this->getCategories($entry)),
                        'content'    => $entry->getContent()->getContent(),
                    ]));

                    yield 'Updated ' . $entry->getTitle();
                }
            }
        }
    }

    protected function getCategories(Entry $entry): array
    {
        $result = [];
        $categories = $entry->getCategory();

        if (!empty($categories)) {
            foreach ($categories as $category) {
                $result[] = $this->slugify->slugify($category->getTerm());
            }
        }

        return $result;
    }

    protected function getFirstAuthor(Entry $entry): ?Person
    {
        $authors = $entry->getAuthor();
        if (!empty($authors)) {
            return reset($authors);
        }

        return null;
    }
}
