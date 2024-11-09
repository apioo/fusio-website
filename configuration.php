<?php

use Monolog\Logger;
use function Symfony\Component\DependencyInjection\Loader\Configurator\env;

return [

    'recaptcha_key'           => env('APP_RECAPTCHA_KEY')->string(),
    'recaptcha_secret'        => env('APP_RECAPTCHA_SECRET')->string(),

    // the blog source xml file containing all posts
    'blog_file'               => __DIR__ . '/resources/blog.xml',
    'blog_title'              => 'Fusio',

    // the default author of the blog posts
    'blog_author_name'        => 'chriskapp',
    'blog_author_uri'         => 'https://chrisk.app/',

    // the blog template files
    'blog_template_index'     => 'blog.php',
    'blog_template_detail'    => 'blog/detail.php',

    // GIT repo data
    'git_api'                 => 'https://api.github.com',
    'git_owner'               => 'apioo',
    'git_repo'                => 'fusio',

    // The url to the psx public folder (i.e. http://api.acme.com or http://127.0.0.1/psx/public)
    'psx_url'                 => env('APP_URL')->string(),

    // The input path 'index.php/' or '' if every request is served to the index.php file
    'psx_dispatch'            => '',

    // Defines the current environment i.e. prod or dev
    'psx_env'                 => env('APP_ENV')->string()->default('prod'),

    // Whether the app runs in debug mode or not. If not error reporting is set to 0, also several caches are used if
    // the debug mode is false
    'psx_debug'               => env('APP_DEBUG')->bool()->default(false),

    // Database parameters which are used for the doctrine DBAL connection
    // https://www.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/configuration.html
    'psx_connection'          => 'pdo-sqlite:///' . __DIR__ . '/cache/app.db',

    // Mailer connection which is used to send mails
    // https://symfony.com/doc/current/mailer.html#using-built-in-transports
    'psx_mailer'              => env('APP_MAILER')->string(),

    // The log level
    'psx_log_level'           => Logger::ERROR,

    // Folder locations
    'psx_path_cache'          => __DIR__ . '/cache',
    'psx_path_src'            => __DIR__ . '/src',
    'psx_path_log'            => __DIR__ . '/log',

    // Supported writers
    'psx_supported_writer'    => [
        \PSX\Data\Writer\Json::class,
        \PSX\Data\Writer\Jsonp::class,
        \PSX\Data\Writer\Jsonx::class,
    ],

];
