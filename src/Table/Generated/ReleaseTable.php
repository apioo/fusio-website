<?php

namespace App\Table\Generated;

/**
 * @extends \PSX\Sql\TableAbstract<\App\Table\Generated\ReleaseRow>
 */
class ReleaseTable extends \PSX\Sql\TableAbstract
{
    public const NAME = 'app_release';
    public const COLUMN_ID = 'id';
    public const COLUMN_TAG_NAME = 'tag_name';
    public const COLUMN_HTML_URL = 'html_url';
    public const COLUMN_PUBLISHED_AT = 'published_at';
    public const COLUMN_AUTHOR_NAME = 'author_name';
    public const COLUMN_AUTHOR_URI = 'author_uri';
    public const COLUMN_BODY = 'body';
    public const COLUMN_ASSET_NAME = 'asset_name';
    public const COLUMN_ASSET_URL = 'asset_url';
    public const COLUMN_ASSET_SIZE = 'asset_size';
    public const COLUMN_ASSET_MIME = 'asset_mime';
    public function getName() : string
    {
        return self::NAME;
    }
    public function getColumns() : array
    {
        return array(self::COLUMN_ID => 0x10a00040, self::COLUMN_TAG_NAME => 0xa00020, self::COLUMN_HTML_URL => 0xa000ff, self::COLUMN_PUBLISHED_AT => 0x800000, self::COLUMN_AUTHOR_NAME => 0xa00080, self::COLUMN_AUTHOR_URI => 0xa000ff, self::COLUMN_BODY => 0xb00000, self::COLUMN_ASSET_NAME => 0xa000ff, self::COLUMN_ASSET_URL => 0xa000ff, self::COLUMN_ASSET_SIZE => 0xa000ff, self::COLUMN_ASSET_MIME => 0xa000ff);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findAll(?\PSX\Sql\Condition $condition = null, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        return $this->doFindAll($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findBy(\PSX\Sql\Condition $condition, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneBy(\PSX\Sql\Condition $condition) : ?\App\Table\Generated\ReleaseRow
    {
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function find(string $id) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('id', $id);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
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
    public function findOneById(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('id', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateById(string $value, \App\Table\Generated\ReleaseRow $record) : int
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
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByTagName(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('tag_name', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByTagName(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('tag_name', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByTagName(string $value, \App\Table\Generated\ReleaseRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('tag_name', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByTagName(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('tag_name', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByHtmlUrl(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('html_url', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByHtmlUrl(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('html_url', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByHtmlUrl(string $value, \App\Table\Generated\ReleaseRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('html_url', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByHtmlUrl(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('html_url', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByPublishedAt(\PSX\DateTime\LocalDateTime $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('published_at', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByPublishedAt(\PSX\DateTime\LocalDateTime $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('published_at', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByPublishedAt(\PSX\DateTime\LocalDateTime $value, \App\Table\Generated\ReleaseRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('published_at', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByPublishedAt(\PSX\DateTime\LocalDateTime $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->equals('published_at', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
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
    public function findOneByAuthorName(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('author_name', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByAuthorName(string $value, \App\Table\Generated\ReleaseRow $record) : int
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
     * @return array<\App\Table\Generated\ReleaseRow>
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
    public function findOneByAuthorUri(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('author_uri', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByAuthorUri(string $value, \App\Table\Generated\ReleaseRow $record) : int
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
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByBody(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('body', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByBody(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('body', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByBody(string $value, \App\Table\Generated\ReleaseRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('body', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByBody(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('body', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByAssetName(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('asset_name', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByAssetName(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('asset_name', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByAssetName(string $value, \App\Table\Generated\ReleaseRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('asset_name', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByAssetName(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('asset_name', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByAssetUrl(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('asset_url', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByAssetUrl(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('asset_url', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByAssetUrl(string $value, \App\Table\Generated\ReleaseRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('asset_url', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByAssetUrl(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('asset_url', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByAssetSize(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('asset_size', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByAssetSize(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('asset_size', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByAssetSize(string $value, \App\Table\Generated\ReleaseRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('asset_size', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByAssetSize(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('asset_size', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByAssetMime(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?\PSX\Sql\OrderBy $sortOrder = null) : array
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('asset_mime', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByAssetMime(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('asset_mime', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateByAssetMime(string $value, \App\Table\Generated\ReleaseRow $record) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('asset_mime', $value);
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function deleteByAssetMime(string $value) : int
    {
        $condition = \PSX\Sql\Condition::withAnd();
        $condition->like('asset_mime', $value);
        return $this->doDeleteBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function create(\App\Table\Generated\ReleaseRow $record) : int
    {
        return $this->doCreate($record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function update(\App\Table\Generated\ReleaseRow $record) : int
    {
        return $this->doUpdate($record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function updateBy(\PSX\Sql\Condition $condition, \App\Table\Generated\ReleaseRow $record) : int
    {
        return $this->doUpdateBy($condition, $record->toRecord());
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function delete(\App\Table\Generated\ReleaseRow $record) : int
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
    protected function newRecord(array $row) : \App\Table\Generated\ReleaseRow
    {
        return \App\Table\Generated\ReleaseRow::from($row);
    }
}