<?php

namespace App\Table;

use App\Table\Generated\AdapterTable;

/**
 * Adapter
 *
 * @see http://phpsx.org/doc/concept/table.html
 */
class Adapter extends AdapterTable
{
    public function findIndexEntriesFusio()
    {
        $builder = $this->connection->createQueryBuilder()
            ->select('name', 'description', 'url', 'repository', 'downloads', 'favers', 'capabilities', 'updateDate', 'insertDate')
            ->from('adapter')
            ->where('name LIKE :name')
            ->orderBy('name', 'ASC');

        return $this->project($builder->getSQL(), ['name' => 'fusio/%']);
    }

    public function findIndexEntriesCommunity()
    {
        $builder = $this->connection->createQueryBuilder()
            ->select('name', 'description', 'url', 'repository', 'downloads', 'favers', 'capabilities', 'updateDate', 'insertDate')
            ->from('adapter')
            ->where('name NOT LIKE :name')
            ->orderBy('name', 'ASC');

        return $this->project($builder->getSQL(), ['name' => 'fusio/%']);
    }
}
