<?php

namespace App\Table\Generated;

/**
 * @extends \PSX\Sql\TableAbstract<\App\Table\Generated\BlogRow>
 */
class BlogTable extends \PSX\Sql\TableAbstract
{
    public const NAME = 'app_blog';
    public const COLUMN_ID = 'id';
    public const COLUMN_TITLE = 'title';
    public const COLUMN_TITLE_SLUG = 'title_slug';
    public const COLUMN_AUTHOR_NAME = 'author_name';
    public const COLUMN_AUTHOR_URI = 'author_uri';
    public const COLUMN_UPDATED = 'updated';
    public const COLUMN_SUMMARY = 'summary';
    public const COLUMN_CATEGORY = 'category';
    public const COLUMN_CONTENT = 'content';
    public function getName() : string
    {
        return self::NAME;
    }
    public function getColumns() : array
    {
        return array(self::COLUMN_ID => 0x10a00040, self::COLUMN_TITLE => 0xa000ff, self::COLUMN_TITLE_SLUG => 0xa000ff, self::COLUMN_AUTHOR_NAME => 0xa00080, self::COLUMN_AUTHOR_URI => 0xa000ff, self::COLUMN_UPDATED => 0x800000, self::COLUMN_SUMMARY => 0xb00000, self::COLUMN_CATEGORY => 0xa000ff, self::COLUMN_CONTENT => 0xb00000);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findAll(?\PSX\Sql\Condition $condition = null, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        return $this->doFindAll($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findBy(\PSX\Sql\Condition $condition, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneBy(\PSX\Sql\Condition $condition) : ?\App\Table\Generated\BlogRow
    {
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function find(string $id) : ?\App\Table\Generated\BlogRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('id', $id);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findById(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('id', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneById(string $value) : ?\App\Table\Generated\BlogRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('id', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateById(string $value, \App\Table\Generated\BlogRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('id', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteById(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('id', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByTitle(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('title', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByTitle(string $value) : ?\App\Table\Generated\BlogRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('title', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByTitle(string $value, \App\Table\Generated\BlogRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('title', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByTitle(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('title', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByTitleSlug(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('title_slug', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByTitleSlug(string $value) : ?\App\Table\Generated\BlogRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('title_slug', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByTitleSlug(string $value, \App\Table\Generated\BlogRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('title_slug', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByTitleSlug(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('title_slug', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByAuthorName(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('author_name', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByAuthorName(string $value) : ?\App\Table\Generated\BlogRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('author_name', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByAuthorName(string $value, \App\Table\Generated\BlogRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('author_name', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByAuthorName(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('author_name', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByAuthorUri(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('author_uri', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByAuthorUri(string $value) : ?\App\Table\Generated\BlogRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('author_uri', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByAuthorUri(string $value, \App\Table\Generated\BlogRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('author_uri', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByAuthorUri(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('author_uri', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByUpdated(\PSX\DateTime\LocalDateTime $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('updated', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByUpdated(\PSX\DateTime\LocalDateTime $value) : ?\App\Table\Generated\BlogRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('updated', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByUpdated(\PSX\DateTime\LocalDateTime $value, \App\Table\Generated\BlogRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('updated', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByUpdated(\PSX\DateTime\LocalDateTime $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('updated', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findBySummary(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('summary', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneBySummary(string $value) : ?\App\Table\Generated\BlogRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('summary', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateBySummary(string $value, \App\Table\Generated\BlogRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('summary', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteBySummary(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('summary', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByCategory(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('category', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByCategory(string $value) : ?\App\Table\Generated\BlogRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('category', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByCategory(string $value, \App\Table\Generated\BlogRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('category', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByCategory(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('category', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByContent(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('content', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByContent(string $value) : ?\App\Table\Generated\BlogRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('content', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByContent(string $value, \App\Table\Generated\BlogRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('content', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByContent(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('content', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function create(\App\Table\Generated\BlogRow $record) : int
    {
        return $this->doCreate($record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function update(\App\Table\Generated\BlogRow $record) : int
    {
        return $this->doUpdate($record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateBy(\PSX\Sql\Condition $condition, \App\Table\Generated\BlogRow $record) : int
    {
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function delete(\App\Table\Generated\BlogRow $record) : int
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
    protected function newRecord(array $row) : \App\Table\Generated\BlogRow
    {
        return \App\Table\Generated\BlogRow::from($row);
    }
}