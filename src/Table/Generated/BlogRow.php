<?php

namespace App\Table\Generated;

class BlogRow implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    private ?string $id = null;
    private ?string $title = null;
    private ?string $titleSlug = null;
    private ?string $authorName = null;
    private ?string $authorUri = null;
    private ?\PSX\DateTime\LocalDateTime $updated = null;
    private ?string $summary = null;
    private ?string $category = null;
    private ?string $content = null;
    public function setId(string $id) : void
    {
        $this->id = $id;
    }
    public function getId() : string
    {
        return $this->id ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "id" was provided');
    }
    public function setTitle(string $title) : void
    {
        $this->title = $title;
    }
    public function getTitle() : string
    {
        return $this->title ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "title" was provided');
    }
    public function setTitleSlug(string $titleSlug) : void
    {
        $this->titleSlug = $titleSlug;
    }
    public function getTitleSlug() : string
    {
        return $this->titleSlug ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "title_slug" was provided');
    }
    public function setAuthorName(string $authorName) : void
    {
        $this->authorName = $authorName;
    }
    public function getAuthorName() : string
    {
        return $this->authorName ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "author_name" was provided');
    }
    public function setAuthorUri(string $authorUri) : void
    {
        $this->authorUri = $authorUri;
    }
    public function getAuthorUri() : string
    {
        return $this->authorUri ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "author_uri" was provided');
    }
    public function setUpdated(\PSX\DateTime\LocalDateTime $updated) : void
    {
        $this->updated = $updated;
    }
    public function getUpdated() : \PSX\DateTime\LocalDateTime
    {
        return $this->updated ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "updated" was provided');
    }
    public function setSummary(string $summary) : void
    {
        $this->summary = $summary;
    }
    public function getSummary() : string
    {
        return $this->summary ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "summary" was provided');
    }
    public function setCategory(string $category) : void
    {
        $this->category = $category;
    }
    public function getCategory() : string
    {
        return $this->category ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "category" was provided');
    }
    public function setContent(string $content) : void
    {
        $this->content = $content;
    }
    public function getContent() : string
    {
        return $this->content ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "content" was provided');
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('title', $this->title);
        $record->put('title_slug', $this->titleSlug);
        $record->put('author_name', $this->authorName);
        $record->put('author_uri', $this->authorUri);
        $record->put('updated', $this->updated);
        $record->put('summary', $this->summary);
        $record->put('category', $this->category);
        $record->put('content', $this->content);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
    public static function from(array|\ArrayAccess $data) : self
    {
        $row = new self();
        $row->id = isset($data['id']) && is_string($data['id']) ? $data['id'] : null;
        $row->title = isset($data['title']) && is_string($data['title']) ? $data['title'] : null;
        $row->titleSlug = isset($data['title_slug']) && is_string($data['title_slug']) ? $data['title_slug'] : null;
        $row->authorName = isset($data['author_name']) && is_string($data['author_name']) ? $data['author_name'] : null;
        $row->authorUri = isset($data['author_uri']) && is_string($data['author_uri']) ? $data['author_uri'] : null;
        $row->updated = isset($data['updated']) && $data['updated'] instanceof \DateTimeInterface ? \PSX\DateTime\LocalDateTime::from($data['updated']) : null;
        $row->summary = isset($data['summary']) && is_string($data['summary']) ? $data['summary'] : null;
        $row->category = isset($data['category']) && is_string($data['category']) ? $data['category'] : null;
        $row->content = isset($data['content']) && is_string($data['content']) ? $data['content'] : null;
        return $row;
    }
}