<?php

namespace App\Website;

use App\Table;
use PSX\Dependency\Attribute\Inject;
use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;
use PSX\Sql\TableManagerInterface;

class Blog extends ViewAbstract
{
    private const ITEMS_PER_PAGE = 8;

    #[Inject]
    private TableManagerInterface $tableManager;

    protected function doGet(HttpContextInterface $context): mixed
    {
        $table        = $this->tableManager->getTable(Table\Blog::class);
        $totalResults = $table->getCount();
        $selfUrl      = $this->reverseRouter->getUrl(__CLASS__);
        $startIndex   = $this->getStartIndex($context);

        return $this->render(__DIR__ . '/resource/blog.php', [
            'totalResults' => $totalResults,
            'startIndex'   => $startIndex,
            'entry'        => $table->findIndexEntries($startIndex),
            'links'        => $this->getLinks($selfUrl, $startIndex, $totalResults),
        ]);
    }


    /**
     * Returns the HATEOAS links for further navigation
     *
     * @return array
     */
    private function getLinks(string $selfUrl, int $startIndex, int $totalResults)
    {
        $prev = $startIndex - self::ITEMS_PER_PAGE;
        $prev = max($prev, 0);
        $next = $startIndex + self::ITEMS_PER_PAGE;
        $next = $next >= $totalResults ? $startIndex : $next;

        return [[
            'rel'  => 'self',
            'href' => $selfUrl,
        ],[
            'rel'  => 'next',
            'href' => $selfUrl . '?startIndex=' . $next,
        ],[
            'rel'  => 'prev',
            'href' => $selfUrl . '?startIndex=' . $prev,
        ]];
    }

    /**
     * Returns the startIndex GET parameter
     */
    private function getStartIndex(HttpContextInterface $context): int
    {
        $startIndex = (int) $context->getParameter('startIndex');
        $startIndex = max($startIndex, 0);
        $startIndex = $startIndex % self::ITEMS_PER_PAGE !== 0 ? $startIndex - ($startIndex % self::ITEMS_PER_PAGE) : $startIndex;

        return $startIndex;
    }
}
