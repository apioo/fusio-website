<?php

return [

    [['ANY'], '/', App\Website\Index::class],
    [['ANY'], '/about', App\Website\About::class],
    [['ANY'], '/bootstrap', App\Website\Bootstrap::class],
    [['ANY'], '/download', App\Website\Download::class],
    [['ANY'], '/documentation', App\Website\Documentation::class],
    [['ANY'], '/demo', App\Website\Demo::class],
    [['ANY'], '/use-cases', App\Website\UseCases::class],
    [['ANY'], '/license', App\Website\License::class],
    [['ANY'], '/marketplace', App\Website\Marketplace::class],
    [['ANY'], '/blog', App\Website\Blog::class],
    [['ANY'], '/blog/post/:title', App\Website\Blog\Detail::class],
    [['ANY'], '/blog/feed', App\Website\Blog\Feed::class],
    [['ANY'], '/adapter', App\Website\Adapter::class],
    [['ANY'], '/sdk', App\Website\Sdk::class],
    [['ANY'], '/tools', App\Website\Tools::class],
    [['ANY'], '/worker', App\Website\Worker::class],
    [['ANY'], '/samples', App\Website\Samples::class],
    [['ANY'], '/contact', App\Website\Contact::class],
    [['ANY'], '/imprint', App\Website\Imprint::class],
    [['ANY'], '/ping', App\Website\Ping::class],
    [['ANY'], '/documentation/worker', App\Website\Documentation\Worker::class],
    [['ANY'], '/documentation/php', App\Website\Documentation\PHP::class],
    [['ANY'], '/documentation/php/:class', App\Website\Documentation\PHP::class],
    [['ANY'], '/documentation/php/:class/:method', App\Website\Documentation\PHP::class],

];
