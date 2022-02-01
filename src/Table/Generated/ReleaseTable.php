<?php

namespace App\Table\Generated;

/**
 * @extends \PSX\Sql\TableAbstract<\App\Table\Generated\ReleaseRow>
 */
class ReleaseTable extends \PSX\Sql\TableAbstract
{
    public const NAME = 'release';
    public const COLUMN_ID = 'id';
    public const COLUMN_TAGNAME = 'tagName';
    public const COLUMN_HTMLURL = 'htmlUrl';
    public const COLUMN_PUBLISHEDAT = 'publishedAt';
    public const COLUMN_AUTHORNAME = 'authorName';
    public const COLUMN_AUTHORURI = 'authorUri';
    public const COLUMN_BODY = 'body';
    public const COLUMN_ASSETNAME = 'assetName';
    public const COLUMN_ASSETURL = 'assetUrl';
    public const COLUMN_ASSETSIZE = 'assetSize';
    public const COLUMN_ASSETMIME = 'assetMime';
    public function getName() : string
    {
        return self::NAME;
    }
    public function getColumns() : array
    {
        return array(self::COLUMN_ID => 0x10a00040, self::COLUMN_TAGNAME => 0xa00020, self::COLUMN_HTMLURL => 0xa000ff, self::COLUMN_PUBLISHEDAT => 0x800000, self::COLUMN_AUTHORNAME => 0xa00080, self::COLUMN_AUTHORURI => 0xa000ff, self::COLUMN_BODY => 0xb00000, self::COLUMN_ASSETNAME => 0xa000ff, self::COLUMN_ASSETURL => 0xa000ff, self::COLUMN_ASSETSIZE => 0xa000ff, self::COLUMN_ASSETMIME => 0xa000ff);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findAll(?\PSX\Sql\Condition $condition = null, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null, ?\PSX\Sql\Fields $fields = null) : array
    {
        return $this->doFindAll($condition, $startIndex, $count, $sortBy, $sortOrder, $fields);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findBy(\PSX\Sql\Condition $condition, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null, ?\PSX\Sql\Fields $fields = null) : array
    {
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder, $fields);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneBy(\PSX\Sql\Condition $condition, ?\PSX\Sql\Fields $fields = null) : ?\App\Table\Generated\ReleaseRow
    {
        return $this->doFindOneBy($condition, $fields);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function find(string $id) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('id', $id);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
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
    public function findOneById(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('id', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByTagName(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('tagName', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByTagName(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('tagName', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByHtmlUrl(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('htmlUrl', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByHtmlUrl(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('htmlUrl', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByPublishedAt(\DateTime $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->equals('publishedAt', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByPublishedAt(\DateTime $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->equals('publishedAt', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
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
    public function findOneByAuthorName(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('authorName', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
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
    public function findOneByAuthorUri(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('authorUri', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByBody(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('body', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByBody(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('body', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByAssetName(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('assetName', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByAssetName(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('assetName', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByAssetUrl(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('assetUrl', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByAssetUrl(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('assetUrl', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByAssetSize(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('assetSize', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByAssetSize(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('assetSize', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @return array<\App\Table\Generated\ReleaseRow>
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findByAssetMime(string $value, ?int $startIndex = null, ?int $count = null, ?string $sortBy = null, ?int $sortOrder = null) : array
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('assetMime', $value);
        return $this->doFindBy($condition, $startIndex, $count, $sortBy, $sortOrder);
    }
    /**
     * @throws \PSX\Sql\Exception\QueryException
     */
    public function findOneByAssetMime(string $value) : ?\App\Table\Generated\ReleaseRow
    {
        $condition = new \PSX\Sql\Condition();
        $condition->like('assetMime', $value);
        return $this->doFindOneBy($condition);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function create(\App\Table\Generated\ReleaseRow $record) : int
    {
        return $this->doCreate($record);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function update(\App\Table\Generated\ReleaseRow $record) : int
    {
        return $this->doUpdate($record);
    }
    /**
     * @throws \PSX\Sql\Exception\ManipulationException
     */
    public function delete(\App\Table\Generated\ReleaseRow $record) : int
    {
        return $this->doDelete($record);
    }
    protected function newRecord(array $row) : \App\Table\Generated\ReleaseRow
    {
        return new \App\Table\Generated\ReleaseRow($row);
    }
}