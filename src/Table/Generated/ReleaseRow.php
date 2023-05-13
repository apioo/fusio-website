<?php

namespace App\Table\Generated;

class ReleaseRow implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    private ?string $id = null;
    private ?string $tagName = null;
    private ?string $htmlUrl = null;
    private ?\PSX\DateTime\LocalDateTime $publishedAt = null;
    private ?string $authorName = null;
    private ?string $authorUri = null;
    private ?string $body = null;
    private ?string $assetName = null;
    private ?string $assetUrl = null;
    private ?string $assetSize = null;
    private ?string $assetMime = null;
    public function setId(string $id) : void
    {
        $this->id = $id;
    }
    public function getId() : string
    {
        return $this->id ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "id" was provided');
    }
    public function setTagName(string $tagName) : void
    {
        $this->tagName = $tagName;
    }
    public function getTagName() : string
    {
        return $this->tagName ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "tag_name" was provided');
    }
    public function setHtmlUrl(string $htmlUrl) : void
    {
        $this->htmlUrl = $htmlUrl;
    }
    public function getHtmlUrl() : string
    {
        return $this->htmlUrl ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "html_url" was provided');
    }
    public function setPublishedAt(\PSX\DateTime\LocalDateTime $publishedAt) : void
    {
        $this->publishedAt = $publishedAt;
    }
    public function getPublishedAt() : \PSX\DateTime\LocalDateTime
    {
        return $this->publishedAt ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "published_at" was provided');
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
    public function setBody(string $body) : void
    {
        $this->body = $body;
    }
    public function getBody() : string
    {
        return $this->body ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "body" was provided');
    }
    public function setAssetName(string $assetName) : void
    {
        $this->assetName = $assetName;
    }
    public function getAssetName() : string
    {
        return $this->assetName ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "asset_name" was provided');
    }
    public function setAssetUrl(string $assetUrl) : void
    {
        $this->assetUrl = $assetUrl;
    }
    public function getAssetUrl() : string
    {
        return $this->assetUrl ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "asset_url" was provided');
    }
    public function setAssetSize(string $assetSize) : void
    {
        $this->assetSize = $assetSize;
    }
    public function getAssetSize() : string
    {
        return $this->assetSize ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "asset_size" was provided');
    }
    public function setAssetMime(string $assetMime) : void
    {
        $this->assetMime = $assetMime;
    }
    public function getAssetMime() : string
    {
        return $this->assetMime ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "asset_mime" was provided');
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('tag_name', $this->tagName);
        $record->put('html_url', $this->htmlUrl);
        $record->put('published_at', $this->publishedAt);
        $record->put('author_name', $this->authorName);
        $record->put('author_uri', $this->authorUri);
        $record->put('body', $this->body);
        $record->put('asset_name', $this->assetName);
        $record->put('asset_url', $this->assetUrl);
        $record->put('asset_size', $this->assetSize);
        $record->put('asset_mime', $this->assetMime);
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
        $row->tagName = isset($data['tag_name']) && is_string($data['tag_name']) ? $data['tag_name'] : null;
        $row->htmlUrl = isset($data['html_url']) && is_string($data['html_url']) ? $data['html_url'] : null;
        $row->publishedAt = isset($data['published_at']) && $data['published_at'] instanceof \DateTimeInterface ? \PSX\DateTime\LocalDateTime::from($data['published_at']) : null;
        $row->authorName = isset($data['author_name']) && is_string($data['author_name']) ? $data['author_name'] : null;
        $row->authorUri = isset($data['author_uri']) && is_string($data['author_uri']) ? $data['author_uri'] : null;
        $row->body = isset($data['body']) && is_string($data['body']) ? $data['body'] : null;
        $row->assetName = isset($data['asset_name']) && is_string($data['asset_name']) ? $data['asset_name'] : null;
        $row->assetUrl = isset($data['asset_url']) && is_string($data['asset_url']) ? $data['asset_url'] : null;
        $row->assetSize = isset($data['asset_size']) && is_string($data['asset_size']) ? $data['asset_size'] : null;
        $row->assetMime = isset($data['asset_mime']) && is_string($data['asset_mime']) ? $data['asset_mime'] : null;
        return $row;
    }
}