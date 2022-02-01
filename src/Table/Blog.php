<?php

namespace App\Table;

use App\Table\Generated\BlogTable;
use PSX\Sql\TableAbstract;

/**
 * Blog
 *
 * @see http://phpsx.org/doc/concept/table.html
 */
class Blog extends BlogTable
{
    public function findIndexEntries(int $startIndex): array
    {
        $startIndex = max($startIndex, 0);

        $builder = $this->connection->createQueryBuilder()
            ->select('id', 'title', 'titleSlug', 'authorName', 'authorUri', 'updated', 'summary', 'category')
            ->from('blog')
            ->orderBy('updated', 'DESC')
            ->setFirstResult($startIndex)
            ->setMaxResults(8);

        return $this->project($builder->getSQL());
    }

    public function findEntriesByCategory(string $category, int $startIndex)
    {
        $startIndex = max($startIndex, 0);

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
