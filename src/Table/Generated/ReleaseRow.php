<?php

namespace App\Table\Generated;

class ReleaseRow extends \PSX\Record\Record
{
    public function setId(?string $id) : void
    {
        $this->setProperty('id', $id);
    }
    public function getId() : ?string
    {
        return $this->getProperty('id');
    }
    public function setTagName(?string $tagName) : void
    {
        $this->setProperty('tagName', $tagName);
    }
    public function getTagName() : ?string
    {
        return $this->getProperty('tagName');
    }
    public function setHtmlUrl(?string $htmlUrl) : void
    {
        $this->setProperty('htmlUrl', $htmlUrl);
    }
    public function getHtmlUrl() : ?string
    {
        return $this->getProperty('htmlUrl');
    }
    public function setPublishedAt(?\DateTime $publishedAt) : void
    {
        $this->setProperty('publishedAt', $publishedAt);
    }
    public function getPublishedAt() : ?\DateTime
    {
        return $this->getProperty('publishedAt');
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
    public function setBody(?string $body) : void
    {
        $this->setProperty('body', $body);
    }
    public function getBody() : ?string
    {
        return $this->getProperty('body');
    }
    public function setAssetName(?string $assetName) : void
    {
        $this->setProperty('assetName', $assetName);
    }
    public function getAssetName() : ?string
    {
        return $this->getProperty('assetName');
    }
    public function setAssetUrl(?string $assetUrl) : void
    {
        $this->setProperty('assetUrl', $assetUrl);
    }
    public function getAssetUrl() : ?string
    {
        return $this->getProperty('assetUrl');
    }
    public function setAssetSize(?string $assetSize) : void
    {
        $this->setProperty('assetSize', $assetSize);
    }
    public function getAssetSize() : ?string
    {
        return $this->getProperty('assetSize');
    }
    public function setAssetMime(?string $assetMime) : void
    {
        $this->setProperty('assetMime', $assetMime);
    }
    public function getAssetMime() : ?string
    {
        return $this->getProperty('assetMime');
    }
}