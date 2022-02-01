<?php

namespace App\Table;

use App\Table\Generated\ReleaseRow;
use App\Table\Generated\ReleaseTable;
use PSX\Sql\Sql;

/**
 * Release
 *
 * @see http://phpsx.org/doc/concept/table.html
 */
class Release extends ReleaseTable
{
    public function findLatestRelease(): ?ReleaseRow
    {
        $releases = $this->findAll(null, 0, 1, 'publishedAt', Sql::SORT_DESC);
        $release  = reset($releases);

        return $release instanceof ReleaseRow ? $release : null;
    }
}
