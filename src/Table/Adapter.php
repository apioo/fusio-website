<?php

namespace App\Table;

use App\Table\Generated\AdapterTable;

class Adapter extends AdapterTable
{
    public function findIndexEntriesFusio(): array
    {
        /** @psalm-suppress TooManyArguments */
        $builder = $this->connection->createQueryBuilder()
            ->select(self::COLUMN_NAME, self::COLUMN_DESCRIPTION, self::COLUMN_URL, self::COLUMN_REPOSITORY, self::COLUMN_DOWNLOADS, self::COLUMN_FAVERS, self::COLUMN_UPDATE_DATE, self::COLUMN_INSERT_DATE)
            ->from(self::NAME)
            ->where(self::COLUMN_NAME . ' LIKE :name')
            ->orderBy(self::COLUMN_NAME, 'ASC');

        return $this->project($builder->getSQL(), ['name' => 'fusio/%']);
    }

    public function findIndexEntriesCommunity(): array
    {
        /** @psalm-suppress TooManyArguments */
        $builder = $this->connection->createQueryBuilder()
            ->select(self::COLUMN_NAME, self::COLUMN_DESCRIPTION, self::COLUMN_URL, self::COLUMN_REPOSITORY, self::COLUMN_DOWNLOADS, self::COLUMN_FAVERS, self::COLUMN_UPDATE_DATE, self::COLUMN_INSERT_DATE)
            ->from(self::NAME)
            ->where(self::COLUMN_NAME . ' NOT LIKE :name')
            ->orderBy(self::COLUMN_NAME, 'ASC');

        return $this->project($builder->getSQL(), ['name' => 'fusio/%']);
    }
}
