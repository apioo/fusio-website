<?php

namespace App\Console;

use App\Slugify;
use PSX\Model\Atom\Atom;
use PSX\Sql\TableManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateBlogCommand extends Command
{
    private TableManagerInterface $tableManager;
    private string $feedFile;
    private Slugify $slugify;

    public function __construct(TableManagerInterface $tableManager, string $feedFile)
    {
        parent::__construct();

        $this->tableManager = $tableManager;
        $this->feedFile = $feedFile;
        $this->slugify = new Slugify();
    }

    protected function configure()
    {
        $this
            ->setName('website:update_blog')
            ->setDescription('Updates all entries from the blog xml feed into an sqlite database')
            ->addOption('force', 'f', InputOption::VALUE_NONE, 'Forces the update of all entries');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $table   = $this->tableManager->getTable('Fusio\Website\Table\Blog');
        $atom    = new Atom();
        $message = new Message(['Content-Type' => 'application/atom+xml']);
        $message->setBody(new TempStream(fopen($this->feedFile, 'r')));

        $postCount = $putCount = 0;
        $atom      = $this->importer->import($atom, $message);

        foreach ($atom as $entry) {
            $row    = $table->getOneById($entry->getId());
            $author = $this->getFirstAuthor($entry);

            if (!$author instanceof Atom\Person) {
                throw new \RuntimeException(sprintf('No author provided for entry %s', $entry->getId()));
            }

            if (!$row instanceof RecordInterface) {
                // the blog entry does not exist create it
                $table->create([
                    'id'         => $entry->getId(),
                    'title'      => $entry->getTitle(),
                    'titleSlug'  => $this->slugify->slugify($entry->getTitle()),
                    'authorName' => $author->getName(),
                    'authorUri'  => $author->getUri(),
                    'updated'    => $entry->getUpdated(),
                    'summary'    => $entry->getSummary(),
                    'category'   => $this->getCategories($entry),
                    'content'    => $entry->getContent()->getContent(),
                ]);

                $postCount++;
            } else {
                if ($input->getOption('force') || $entry->getUpdated() > $row->getUpdated()) {
                    // if the update date has change update the entry
                    $table->update([
                        'id'         => $entry->getId(),
                        'title'      => $entry->getTitle(),
                        'titleSlug'  => $this->slugify->slugify($entry->getTitle()),
                        'authorName' => $author->getName(),
                        'authorUri'  => $author->getUri(),
                        'updated'    => $entry->getUpdated(),
                        'summary'    => $entry->getSummary(),
                        'category'   => $this->getCategories($entry),
                        'content'    => $entry->getContent()->getContent(),
                    ]);

                    $putCount++;
                }
            }
        }

        $output->writeln(sprintf('Created %s and updated %s entries', $postCount, $putCount));
    }

    protected function getCategories(Atom\Entry $entry)
    {
        $result     = array();
        $categories = $entry->getCategory();

        if (!empty($categories)) {
            foreach ($categories as $category) {
                $result[] = $this->slugify->slugify($category->getTerm());
            }
        }

        return $result;
    }

    protected function getFirstAuthor(Atom\Entry $entry)
    {
        $authors = $entry->getAuthor();

        if (!empty($authors)) {
            return current($authors);
        }

        return null;
    }
}
