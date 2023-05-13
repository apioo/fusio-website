<?php

namespace App\Table\Generated;

/**
 * @extends \PSX\Sql\TableAbstract<\App\Table\Generated\AdapterRow>
 */
class AdapterTable extends \PSX\Sql\TableAbstract
{
    public const NAME = 'app_adapter';
    public const COLUMN_NAME = 'name';
    public const COLUMN_DESCRIPTION = 'description';
    public const COLUMN_URL = 'url';
    public const COLUMN_REPOSITORY = 'repository';
    public const COLUMN_DOWNLOADS = 'downloads';
    public const COLUMN_FAVERS = 'favers';
    public const COLUMN_UPDATE_DATE = 'update_date';
    public const COLUMN_INSERT_DATE = 'insert_date';
    public function getName() : string
    {
        return self::NAME;
    }
    public function getColumns() : array
    {
        return array(self::COLUMN_NAME => 0x10a00040, self::COLUMN_DESCRIPTION => 0xa000ff, self::COLUMN_URL => 0xa000ff, self::COLUMN_REPOSITORY => 0xa000ff, self::COLUMN_DOWNLOADS => 0x20000a, self::COLUMN_FAVERS => 0x20000a, self::COLUMN_UPDATE_DATE => 0x800000, self::COLUMN_INSERT_DATE => 0x800000);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findAll(?\PSX\Sql\Condition $condition = null, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        return $this->doFindAll($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findBy(\PSX\Sql\Condition $condition, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneBy(\PSX\Sql\Condition $condition) : ?\App\Table\Generated\AdapterRow
    {
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function find(string $name) : ?\App\Table\Generated\AdapterRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('name', $name);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByName(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('name', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByName(string $value) : ?\App\Table\Generated\AdapterRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('name', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByName(string $value, \App\Table\Generated\AdapterRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('name', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByName(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('name', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByDescription(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('description', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByDescription(string $value) : ?\App\Table\Generated\AdapterRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('description', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByDescription(string $value, \App\Table\Generated\AdapterRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('description', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByDescription(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('description', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByUrl(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('url', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByUrl(string $value) : ?\App\Table\Generated\AdapterRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('url', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByUrl(string $value, \App\Table\Generated\AdapterRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('url', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByUrl(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('url', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByRepository(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('repository', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByRepository(string $value) : ?\App\Table\Generated\AdapterRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('repository', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByRepository(string $value, \App\Table\Generated\AdapterRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('repository', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByRepository(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('repository', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByDownloads(int $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('downloads', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByDownloads(int $value) : ?\App\Table\Generated\AdapterRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('downloads', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByDownloads(int $value, \App\Table\Generated\AdapterRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('downloads', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByDownloads(int $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('downloads', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByFavers(int $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('favers', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByFavers(int $value) : ?\App\Table\Generated\AdapterRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('favers', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByFavers(int $value, \App\Table\Generated\AdapterRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('favers', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByFavers(int $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('favers', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByUpdateDate(\PSX\DateTime\LocalDateTime $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('update_date', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByUpdateDate(\PSX\DateTime\LocalDateTime $value) : ?\App\Table\Generated\AdapterRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('update_date', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByUpdateDate(\PSX\DateTime\LocalDateTime $value, \App\Table\Generated\AdapterRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('update_date', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByUpdateDate(\PSX\DateTime\LocalDateTime $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('update_date', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\AdapterRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByInsertDate(\PSX\DateTime\LocalDateTime $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('insert_date', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByInsertDate(\PSX\DateTime\LocalDateTime $value) : ?\App\Table\Generated\AdapterRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('insert_date', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByInsertDate(\PSX\DateTime\LocalDateTime $value, \App\Table\Generated\AdapterRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('insert_date', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByInsertDate(\PSX\DateTime\LocalDateTime $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('insert_date', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function create(\App\Table\Generated\AdapterRow $record) : int
    {
        return $this->doCreate($record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function update(\App\Table\Generated\AdapterRow $record) : int
    {
        return $this->doUpdate($record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateBy(\PSX\Sql\Condition $condition, \App\Table\Generated\AdapterRow $record) : int
    {
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function delete(\App\Table\Generated\AdapterRow $record) : int
    {
        return $this->doDelete($record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteBy(\PSX\Sql\Condition $condition) : int
    {
        return $this->doDeleteBy($condition);
    }
    /**
     * @param array<string, mixed> $row
     */
    protected function newRecord(array $row) : \App\Table\Generated\AdapterRow
    {
        return \App\Table\Generated\AdapterRow::from($row);
    }
}