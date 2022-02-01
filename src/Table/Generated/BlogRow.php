<?php

namespace App\Table\Generated;

class BlogRow extends \PSX\Record\Record
{
    public function setId(?string $id) : void
    {
        $this->setProperty('id', $id);
    }
    public function getId() : ?string
    {
        return $this->getProperty('id');
    }
    public function setTitle(?string $title) : void
    {
        $this->setProperty('title', $title);
    }
    public function getTitle() : ?string
    {
        return $this->getProperty('title');
    }
    public function setTitleSlug(?string $titleSlug) : void
    {
        $this->setProperty('titleSlug', $titleSlug);
    }
    public function getTitleSlug() : ?string
    {
        return $this->getProperty('titleSlug');
    }
    public function setAuthorName(?string $authorName) : void
    {
        $this->setProperty('authorName', $authorName);
    }
    public function getAuthorName() : ?string
    {
        return $this->getProperty('authorName');
    }
    public function setAuthorUri(?string $authorUri) : void
    {
        $this->setProperty('authorUri', $authorUri);
    }
    public function getAuthorUri() : ?string
    {
        return $this->getProperty('authorUri');
    }
    public function setUpdated(?\DateTime $updated) : void
    {
        $this->setProperty('updated', $updated);
    }
    public function getUpdated() : ?\DateTime
    {
        return $this->getProperty('updated');
    }
    public function setSummary(?string $summary) : void
    {
        $this->setProperty('summary', $summary);
    }
    public function getSummary() : ?string
    {
        return $this->getProperty('summary');
    }
    public function setCategory(?string $category) : void
    {
        $this->setProperty('category', $category);
    }
    public function getCategory() : ?string
    {
        return $this->getProperty('category');
    }
    public function setContent(?string $content) : void
    {
        $this->setProperty('content', $content);
    }
    public function getContent() : ?string
    {
        return $this->getProperty('content');
    }
}