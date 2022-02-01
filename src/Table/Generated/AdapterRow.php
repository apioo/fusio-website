<?php

namespace App\Table\Generated;

class AdapterRow extends \PSX\Record\Record
{
    public function setName(?string $name) : void
    {
        $this->setProperty('name', $name);
    }
    public function getName() : ?string
    {
        return $this->getProperty('name');
    }
    public function setDescription(?string $description) : void
    {
        $this->setProperty('description', $description);
    }
    public function getDescription() : ?string
    {
        return $this->getProperty('description');
    }
    public function setUrl(?string $url) : void
    {
        $this->setProperty('url', $url);
    }
    public function getUrl() : ?string
    {
        return $this->getProperty('url');
    }
    public function setRepository(?string $repository) : void
    {
        $this->setProperty('repository', $repository);
    }
    public function getRepository() : ?string
    {
        return $this->getProperty('repository');
    }
    public function setDownloads(?int $downloads) : void
    {
        $this->setProperty('downloads', $downloads);
    }
    public function getDownloads() : ?int
    {
        return $this->getProperty('downloads');
    }
    public function setFavers(?int $favers) : void
    {
        $this->setProperty('favers', $favers);
    }
    public function getFavers() : ?int
    {
        return $this->getProperty('favers');
    }
    public function setCapabilities(?string $capabilities) : void
    {
        $this->setProperty('capabilities', $capabilities);
    }
    public function getCapabilities() : ?string
    {
        return $this->getProperty('capabilities');
    }
    public function setUpdateDate(?\DateTime $updateDate) : void
    {
        $this->setProperty('updateDate', $updateDate);
    }
    public function getUpdateDate() : ?\DateTime
    {
        return $this->getProperty('updateDate');
    }
    public function setInsertDate(?\DateTime $insertDate) : void
    {
        $this->setProperty('insertDate', $insertDate);
    }
    public function getInsertDate() : ?\DateTime
    {
        return $this->getProperty('insertDate');
    }
}