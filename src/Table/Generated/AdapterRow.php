<?php

namespace App\Table\Generated;

class AdapterRow implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    private ?string $name = null;
    private ?string $description = null;
    private ?string $url = null;
    private ?string $repository = null;
    private ?int $downloads = null;
    private ?int $favers = null;
    private ?\PSX\DateTime\LocalDateTime $updateDate = null;
    private ?\PSX\DateTime\LocalDateTime $insertDate = null;
    public function setName(string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : string
    {
        return $this->name ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "name" was provided');
    }
    public function setDescription(string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : string
    {
        return $this->description ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "description" was provided');
    }
    public function setUrl(string $url) : void
    {
        $this->url = $url;
    }
    public function getUrl() : string
    {
        return $this->url ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "url" was provided');
    }
    public function setRepository(string $repository) : void
    {
        $this->repository = $repository;
    }
    public function getRepository() : string
    {
        return $this->repository ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "repository" was provided');
    }
    public function setDownloads(int $downloads) : void
    {
        $this->downloads = $downloads;
    }
    public function getDownloads() : int
    {
        return $this->downloads ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "downloads" was provided');
    }
    public function setFavers(int $favers) : void
    {
        $this->favers = $favers;
    }
    public function getFavers() : int
    {
        return $this->favers ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "favers" was provided');
    }
    public function setUpdateDate(\PSX\DateTime\LocalDateTime $updateDate) : void
    {
        $this->updateDate = $updateDate;
    }
    public function getUpdateDate() : \PSX\DateTime\LocalDateTime
    {
        return $this->updateDate ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "update_date" was provided');
    }
    public function setInsertDate(\PSX\DateTime\LocalDateTime $insertDate) : void
    {
        $this->insertDate = $insertDate;
    }
    public function getInsertDate() : \PSX\DateTime\LocalDateTime
    {
        return $this->insertDate ?? throw new \PSX\Sql\Exception\NoValueAvailable('No value for required column "insert_date" was provided');
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('description', $this->description);
        $record->put('url', $this->url);
        $record->put('repository', $this->repository);
        $record->put('downloads', $this->downloads);
        $record->put('favers', $this->favers);
        $record->put('update_date', $this->updateDate);
        $record->put('insert_date', $this->insertDate);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
    public static function from(array|\ArrayAccess $data) : self
    {
        $row = new self();
        $row->name = isset($data['name']) && is_string($data['name']) ? $data['name'] : null;
        $row->description = isset($data['description']) && is_string($data['description']) ? $data['description'] : null;
        $row->url = isset($data['url']) && is_string($data['url']) ? $data['url'] : null;
        $row->repository = isset($data['repository']) && is_string($data['repository']) ? $data['repository'] : null;
        $row->downloads = isset($data['downloads']) && is_int($data['downloads']) ? $data['downloads'] : null;
        $row->favers = isset($data['favers']) && is_int($data['favers']) ? $data['favers'] : null;
        $row->updateDate = isset($data['update_date']) && $data['update_date'] instanceof \DateTimeInterface ? \PSX\DateTime\LocalDateTime::from($data['update_date']) : null;
        $row->insertDate = isset($data['insert_date']) && $data['insert_date'] instanceof \DateTimeInterface ? \PSX\DateTime\LocalDateTime::from($data['insert_date']) : null;
        return $row;
    }
}