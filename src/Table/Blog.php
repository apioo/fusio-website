<?php

namespace App\Table;

use App\Table\Generated\BlogTable;
use PSX\Sql\TableAbstract;

class Blog extends BlogTable
{
    public function findIndexEntries(int $startIndex): array
    {
        $startIndex = max($startIndex, 0);

        /** @psalm-suppress TooManyArguments */
        $builder = $this->connection->createQueryBuilder()
            ->select(self::COLUMN_ID, self::COLUMN_TITLE, self::COLUMN_TITLE_SLUG, self::COLUMN_AUTHOR_NAME, self::COLUMN_AUTHOR_URI, self::COLUMN_UPDATED, self::COLUMN_SUMMARY, self::COLUMN_CATEGORY)
            ->from(self::NAME)
            ->orderBy(self::COLUMN_UPDATED, 'DESC')
            ->setFirstResult($startIndex)
            ->setMaxResults(8);

        return $this->project($builder->getSQL());
    }
}
