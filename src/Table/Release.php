<?php

namespace App\Table;

use App\Table\Generated\ReleaseRow;
use App\Table\Generated\ReleaseTable;
use PSX\Sql\OrderBy;

class Release extends ReleaseTable
{
    public function findLatestRelease(): ?ReleaseRow
    {
        $releases = $this->findAll(null, 0, 1, self::COLUMN_PUBLISHED_AT, OrderBy::DESC);
        $release  = reset($releases);

        return $release instanceof ReleaseRow ? $release : null;
    }
}
