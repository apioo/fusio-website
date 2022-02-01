<?php

namespace App\Table\Generated;

/**
 * @extends \PSX\Sql\TableAbstract<\App\Table\Generated\BlogRow>
 */
class BlogTable extends \PSX\Sql\TableAbstract
{
    public const NAME = 'blog';
    public const COLUMN_ID = 'id';
    public const COLUMN_TITLE = 'title';
    public const COLUMN_TITLESLUG = 'titleSlug';
    public const COLUMN_AUTHORNAME = 'authorName';
    public const COLUMN_AUTHORURI = 'authorUri';
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
        return array(self::COLUMN_ID => 0x10a00040, self::COLUMN_TITLE => 0xa000ff, self::COLUMN_TITLESLUG => 0xa000ff, self::COLUMN_AUTHORNAME => 0xa00080, self::COLUMN_AUTHORURI => 0xa000ff, self::COLUMN_UPDATED => 0x800000, self::COLUMN_SUMMARY => 0xb00000, self::COLUMN_CATEGORY => 0xa000ff, self::COLUMN_CONTENT => 0xb00000);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findAll(?\PSX\Sql\Condition $condition = null, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null, ?\PSX\Sql\Fields $fields = null) : array
    {
        return $this->doFindAll($condition, $startIndex, $count, $sortBy, $sortOrder, $fields);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findBy(\PSX\Sql\Condition $condition, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null, ?\PSX\Sql\Fields $fields = null) : array
    {
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder, $fields);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneBy(\PSX\Sql\Condition $condition, ?\PSX\Sql\Fields $fields = null) : ?\App\Table\Generated\BlogRow
    {
        return $this->doFindOneBy($condition, $fields);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function find(string $id) : ?\App\Table\Generated\BlogRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('id', $id);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findById(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('id', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneById(string $value) : ?\App\Table\Generated\BlogRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('id', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByTitle(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('title', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByTitle(string $value) : ?\App\Table\Generated\BlogRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('title', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByTitleSlug(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('titleSlug', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByTitleSlug(string $value) : ?\App\Table\Generated\BlogRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('titleSlug', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByAuthorName(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('authorName', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByAuthorName(string $value) : ?\App\Table\Generated\BlogRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('authorName', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByAuthorUri(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('authorUri', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByAuthorUri(string $value) : ?\App\Table\Generated\BlogRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('authorUri', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByUpdated(\DateTime $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->equals('updated', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByUpdated(\DateTime $value) : ?\App\Table\Generated\BlogRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->equals('updated', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findBySummary(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('summary', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneBySummary(string $value) : ?\App\Table\Generated\BlogRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('summary', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByCategory(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('category', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByCategory(string $value) : ?\App\Table\Generated\BlogRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('category', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\BlogRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByContent(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('content', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByContent(string $value) : ?\App\Table\Generated\BlogRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('content', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function create(\App\Table\Generated\BlogRow $record) : int
    {
        return $this->doCreate($record);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function update(\App\Table\Generated\BlogRow $record) : int
    {
        return $this->doUpdate($record);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function delete(\App\Table\Generated\BlogRow $record) : int
    {
        return $this->doDelete($record);
    }
    protected function newRecord(array $row) : \App\Table\Generated\BlogRow
    {
        return new \App\Table\Generated\BlogRow($row);
    }
}