<?php

namespace App\Dependency;

use App\Console;
use App\Service\AdapterFetcher;
use App\Service\ApiReader;
use App\Service\BlogUpdater;
use App\Service\CaptchaVerifier;
use App\Service\RecipeReader;
use App\Service\ReleaseFetcher;
use App\Service\VideoReader;
use App\Slugify;
use App\Table\Adapter;
use App\Table\Blog;
use App\Table\Release;
use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use PSX\Framework\Dependency\DefaultContainer;
use PSX\Sql\Console\GenerateCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;

class Container extends DefaultContainer
{
    public function getMailer(): Mailer
    {
        return new Mailer(Transport::fromDsn($this->get('config')->get('app_mailer')));
    }

    public function getSlugify(): Slugify
    {
        return new Slugify();
    }

    public function getAdapterFetcher(): AdapterFetcher
    {
        return new AdapterFetcher(
            $this->get('table_manager')->getTable(Adapter::class),
            $this->get('http_client')
        );
    }

    public function getBlogUpdater(): BlogUpdater
    {
        return new BlogUpdater(
            $this->get('io'),
            $this->get('config')->get('blog_file'),
            $this->get('slugify'),
            $this->get('table_manager')->getTable(Blog::class)
        );
    }

    public function getCaptchaVerifier(): CaptchaVerifier
    {
        return new CaptchaVerifier(
            $this->get('config')->get('app_recaptcha_secret')
        );
    }

    public function getReleaseFetcher(): ReleaseFetcher
    {
        return new ReleaseFetcher(
            $this->get('table_manager')->getTable(Release::class),
            $this->get('config'),
            $this->get('http_client')
        );
    }

    public function getApiReader(): ApiReader
    {
        return new ApiReader(
            $this->get('cache')
        );
    }

    protected function appendConsoleCommands(Application $application): void
    {
        parent::appendConsoleCommands($application);

        $application->add(new GenerateCommand($this->get('connection')));
        $application->add(new Console\CreateSchemaCommand($this->get('connection')));
        $application->add(new Console\FetchReleaseCommand($this->get('release_fetcher')));
        $application->add(new Console\FetchAdapterCommand($this->get('adapter_fetcher')));
        $application->add(new Console\ShowAdapterCommand($this->get('table_manager')->getTable(Adapter::class)));
        $application->add(new Console\ShowBlogCommand($this->get('table_manager')->getTable(Blog::class)));
        $application->add(new Console\ShowReleaseCommand($this->get('table_manager')->getTable(Release::class)));
        $application->add(new Console\UpdateBlogCommand($this->get('blog_updater')));
    }
}
