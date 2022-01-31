<?php

namespace App\Table;

use PSX\Sql\TableAbstract;

/**
 * Adapter
 *
 * @see http://phpsx.org/doc/concept/table.html
 */
class Adapter extends TableAbstract
{
    public function getName()
    {
        return 'adapter';
    }

    public function getColumns()
    {
        return array(
            'name' => self::TYPE_VARCHAR | self::PRIMARY_KEY,
            'description' => self::TYPE_VARCHAR,
            'url' => self::TYPE_VARCHAR,
            'repository' => self::TYPE_VARCHAR,
            'downloads' => self::TYPE_INT,
            'favers' => self::TYPE_INT,
            'capabilities' => self::TYPE_VARCHAR,
            'updateDate' => self::TYPE_DATETIME,
            'insertDate' => self::TYPE_DATETIME,
        );
    }

    public function getIndexEntries($startIndex)
    {
        $startIndex = (int) $startIndex;
        $startIndex = $startIndex < 0 ? 0 : $startIndex;

        $builder = $this->connection->createQueryBuilder()
            ->select('name', 'description', 'url', 'repository', 'downloads', 'favers', 'capabilities', 'updateDate', 'insertDate')
            ->from('adapter')
            ->orderBy('name', 'ASC')
            ->setFirstResult($startIndex)
            ->setMaxResults(21);

        return $this->project($builder->getSQL());
    }
}
