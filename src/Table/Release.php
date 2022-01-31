<?php

namespace App\Table;

use PSX\Sql;
use PSX\Sql\TableAbstract;

/**
 * Release
 *
 * @see http://phpsx.org/doc/concept/table.html
 */
class Release extends TableAbstract
{
    public function getName()
    {
        return 'release';
    }

    public function getColumns()
    {
        return array(
            'id' => self::TYPE_VARCHAR | self::PRIMARY_KEY,
            'tagName' => self::TYPE_VARCHAR,
            'htmlUrl' => self::TYPE_VARCHAR,
            'publishedAt' => self::TYPE_DATETIME,
            'authorName' => self::TYPE_VARCHAR,
            'authorUri' => self::TYPE_VARCHAR,
            'body' => self::TYPE_TEXT,
            'assetName' => self::TYPE_VARCHAR,
            'assetUrl' => self::TYPE_VARCHAR,
            'assetSize' => self::TYPE_VARCHAR,
            'assetMime' => self::TYPE_VARCHAR,
        );
    }

    public function getLatestRelease()
    {
        $releases = $this->getAll(0, 1, 'publishedAt', Sql::SORT_DESC);
        $release  = current($releases);

        return $release;
    }
}
