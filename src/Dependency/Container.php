<?php

namespace App\Dependency;

use App\Console;
use App\Service\CaptchaVerifier;
use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use PSX\Framework\Dependency\DefaultContainer;
use Symfony\Component\Console\Application;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;

class Container extends DefaultContainer
{
    public function getMailer(): Mailer
    {
        return new Mailer(Transport::fromDsn($this->get('config')->get('app_mailer')));
    }

    public function getCaptchaVerifier(): CaptchaVerifier
    {
        return new CaptchaVerifier(
            $this->get('config')->get('app_recaptcha_secret')
        );
    }

    public function getConnection(): Connection
    {
        $config = new Configuration();
        $params = array(
            'path'   => PSX_PATH_CACHE . '/blog.db',
            'driver' => 'pdo_sqlite',
        );

        return DriverManager::getConnection($params, $config);
    }

    protected function appendConsoleCommands(Application $application): void
    {
        parent::appendConsoleCommands($application);

        $application->add(new Console\CreateSchemaCommand($this->get('connection')));
        $application->add(new Console\FetchReleaseCommand($this->get('table_manager'), $this->get('http_client'), $this->get('config')));
        $application->add(new Console\FetchAdapterCommand($this->get('table_manager'), $this->get('http_client'), $this->get('config')));
        $application->add(new Console\ShowReleaseCommand($this->get('table_manager')));
        $application->add(new Console\UpdateBlogCommand($this->get('table_manager'), $this->get('config')->get('blog_file')));
        $application->add(new Console\ShowBlogCommand($this->get('table_manager')));
    }
}
