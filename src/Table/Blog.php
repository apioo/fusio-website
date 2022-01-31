<?php

namespace App\Table;

use PSX\Sql\TableAbstract;

/**
 * Blog
 *
 * @see http://phpsx.org/doc/concept/table.html
 */
class Blog extends TableAbstract
{
    public function getName()
    {
        return 'blog';
    }

    public function getColumns()
    {
        return array(
            'id' => self::TYPE_VARCHAR | self::PRIMARY_KEY,
            'title' => self::TYPE_VARCHAR,
            'titleSlug' => self::TYPE_VARCHAR,
            'authorName' => self::TYPE_VARCHAR,
            'authorUri' => self::TYPE_VARCHAR,
            'updated' => self::TYPE_DATETIME,
            'summary' => self::TYPE_TEXT,
            'category' => self::TYPE_ARRAY,
            'content' => self::TYPE_TEXT,
        );
    }

    public function getIndexEntries($startIndex)
    {
        $startIndex = (int) $startIndex;
        $startIndex = $startIndex < 0 ? 0 : $startIndex;

        $builder = $this->connection->createQueryBuilder()
            ->select('id', 'title', 'titleSlug', 'authorName', 'authorUri', 'updated', 'summary', 'category')
            ->from('blog')
            ->orderBy('updated', 'DESC')
            ->setFirstResult($startIndex)
            ->setMaxResults(8);

        return $this->project($builder->getSQL());
    }

    public function getEntriesByCategory($category, $startIndex)
    {
        $startIndex = (int) $startIndex;
        $startIndex = $startIndex < 0 ? 0 : $startIndex;

        $builder = $this->connection->createQueryBuilder()
            ->select('id', 'title', 'titleSlug', 'authorName', 'authorUri', 'updated', 'summary', 'category')
            ->from('blog')
            ->where('category LIKE :category')
            ->orderBy('updated', 'DESC')
            ->setFirstResult($startIndex)
            ->setMaxResults(8);

        return $this->project($builder->getSQL(), ['category' => '%' . $category . '%']);
    }
}
