<?php

namespace App\Table\Generated;

/**
 * @extends \PSX\Sql\TableAbstract<\App\Table\Generated\AdapterRow>
 */
class AdapterTable extends \PSX\Sql\TableAbstract
{
    public const NAME = 'adapter';
    public const COLUMN_NAME = 'name';
    public const COLUMN_DESCRIPTION = 'description';
    public const COLUMN_URL = 'url';
    public const COLUMN_REPOSITORY = 'repository';
    public const COLUMN_DOWNLOADS = 'downloads';
    public const COLUMN_FAVERS = 'favers';
    public const COLUMN_CAPABILITIES = 'capabilities';
    public const COLUMN_UPDATEDATE = 'updateDate';
    public const COLUMN_INSERTDATE = 'insertDate';
    public function getName() : string
    {
        return self::NAME;
    }
    public function getColumns() : array
    {
        return array(self::COLUMN_NAME => 0x10a00040, self::COLUMN_DESCRIPTION => 0xa000ff, self::COLUMN_URL => 0xa000ff, self::COLUMN_REPOSITORY => 0xa000ff, self::COLUMN_DOWNLOADS => 0x20000a, self::COLUMN_FAVERS => 0x20000a, self::COLUMN_CAPABILITIES => 0xa000ff, self::COLUMN_UPDATEDATE => 0x800000, self::COLUMN_INSERTDATE => 0x800000);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findAll(?\PSX\Sql\Condition $condition = null, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null, ?\PSX\Sql\Fields $fields = null) : array
    {
        return $this->doFindAll($condition, $startIndex, $count, $sortBy, $sortOrder, $fields);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findBy(\PSX\Sql\Condition $condition, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null, ?\PSX\Sql\Fields $fields = null) : array
    {
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder, $fields);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneBy(\PSX\Sql\Condition $condition, ?\PSX\Sql\Fields $fields = null) : ?\App\Table\Generated\AdapterRow
    {
        return $this->doFindOneBy($condition, $fields);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function find(string $name) : ?\App\Table\Generated\AdapterRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('name', $name);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByName(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('name', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByName(string $value) : ?\App\Table\Generated\AdapterRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('name', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByDescription(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('description', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByDescription(string $value) : ?\App\Table\Generated\AdapterRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('description', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByUrl(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('url', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByUrl(string $value) : ?\App\Table\Generated\AdapterRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('url', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByRepository(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('repository', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByRepository(string $value) : ?\App\Table\Generated\AdapterRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('repository', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByDownloads(int $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->equals('downloads', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByDownloads(int $value) : ?\App\Table\Generated\AdapterRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->equals('downloads', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByFavers(int $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->equals('favers', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByFavers(int $value) : ?\App\Table\Generated\AdapterRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->equals('favers', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByCapabilities(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('capabilities', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByCapabilities(string $value) : ?\App\Table\Generated\AdapterRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('capabilities', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByUpdateDate(\DateTime $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->equals('updateDate', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByUpdateDate(\DateTime $value) : ?\App\Table\Generated\AdapterRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->equals('updateDate', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByInsertDate(\DateTime $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->equals('insertDate', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByInsertDate(\DateTime $value) : ?\App\Table\Generated\AdapterRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->equals('insertDate', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function create(\App\Table\Generated\AdapterRow $record) : int
    {
        return $this->doCreate($record);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function update(\App\Table\Generated\AdapterRow $record) : int
    {
        return $this->doUpdate($record);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function delete(\App\Table\Generated\AdapterRow $record) : int
    {
        return $this->doDelete($record);
    }
    protected function newRecord(array $row) : \App\Table\Generated\AdapterRow
    {
        return new \App\Table\Generated\AdapterRow($row);
    }
}