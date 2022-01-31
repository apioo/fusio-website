<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>About</h4>
    <p>Fusio is an open source API management platform which helps to build and 
    manage RESTful APIs. We think that there is a huge potential in the API 
    economy. Whether you need an API to expose your business functionality, 
    develop One-Page web applications, Mobile-Apps or Microservices. Because of 
    this we think that Fusio is a great tool to build such APIs. If you like the
    project and want to see it grow please checkout the 
    <a href="https://github.com/apioo/fusio">repository</a>.</p>
  </div>
</div>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Architecture</h4>

    <p>If you are researching API solutions you probably hear often the term 
    <b>API-Gateway/Proxy</b> and <b>API-Management</b>. Fusio is an API-Management 
    system in the sense that it helps to develop actual API endpoints (which i.e. 
    request and transform data from a database). It is not limited to proxy 
    requests to another API. The following diagram should give you a better 
    overview.</p>

    <div style="text-align:center">
      <img src="<?php echo $base; ?>/img/arch.png">
    </div>

    <p>Fusio uses the backend services to produce the API response or to handle
    the request data. A backend service can be i.e. a database, message queue or 
    another API. It is also very easy to implement a custom 
    <a href="<?php echo $router->getAbsolutePath('Fusio\Website\Application\Adapter::doIndex'); ?>">connection</a> 
    to support any kind of service.</p>

    <p>The API can then be used by apps which are developed by yourself or by 
    3rd party developers. The apps can be i.e. javascript apps (like AngularJS,
    React, etc.), mobile apps or actual desktop apps which need to communicate
    with your API. The Fusio backend app uses also an internal API to configure 
    the system. Because of that it is also very easy to integrate Fusio into an 
    existing system, since you actually could also configure the complete system 
    through the API.</p>

    <h5>Request lifecycle</h5>
    
    <p>To give you a first overview, every request which arrives at Fusio goes 
    through the following lifecycle:</p>

    <div style="text-align:center">
      <img src="<?php echo $base; ?>/img/request_flow.png">
    </div>

    <p>Fusio tries to assign the incoming request to a fitting route. The route 
    contains all schema information about the incoming request and outgoing 
    responses. Those schemas are also used at the documentation which is 
    automatically available. If a request schema was provided the incoming 
    request body gets validated after this schema. In case everything is ok the 
    action which is assigned to the route gets executed.</p>

    <p>An action represents the code which handles an incoming request and 
    produces a response. Each action can use connections to accomplish this 
    task. A connection uses a library which helps to work with a remote service. 
    I.e. the SQL connection uses the Doctrine DBAL library to work with a 
    database (it returns a <code>Doctrine\DBAL\Connection</code> instance). A 
    connection always returns a fully configured object so you never have to 
    deal with any credentials in an action. Besides that there are already many 
    different actions available which you can use i.e. to create an API based on 
    a database table.</p>

    <p>With Fusio we want to remove as many layers as possible so that you can 
    work in your action directly with a specific library. Because of this Fusio 
    has no model or entity system like many other frameworks, instead we 
    recommend to write plain SQL in case you work with a relational database. We 
    think that building API endpoints based on models/entities limits the way 
    how you would design a response. You only need to describe the request and 
    response in the JSON schema format. This schema is then the contract of your 
    API endpoint, how you produce this response technically is secondary. Fusio 
    provides the mentioned connections, which help you to create complete 
    customized responses based on complicated SQL queries, message queue inserts 
    or multiple remote HTTP calls.</p>
  </div>
</div>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Development</h4>
    
    <p>Fusio provides two ways to develop an API. The first way is to build API 
    endpoints only through the backend interface by using all available actions. 
    Through this you can solve already many tasks especially through the usage 
    of the worker actions.</p>

    <p>The other way is to use the deploy mechanism. Through this you can use 
    normal PHP files to implement your business logic and thus you can use the 
    complete PHP ecosystem. Therefor you need to define a <code>.fusio.yml</code> 
    deploy file which specifies the available routes and actions of the system. 
    This file can be deployed with the following command:</p>

    <pre><code class="bash">php bin/fusio deploy</code></pre>

    <p>The action of each route contains the source which handles the business 
    logic. This can be i.e. a simple php file, php class or a url. More 
    information in the src/ folder. In the following an example action to build 
    an API response from a database:</p>

    <pre><code class="php">&lt;?php
/**
 * @var \Fusio\Engine\ConnectorInterface $connector
 * @var \Fusio\Engine\RequestInterface $request
 * @var \Fusio\Engine\Response\FactoryInterface $response
 * @var \Fusio\Engine\ProcessorInterface $processor
 * @var \Psr\Log\LoggerInterface $logger
 * @var \Psr\SimpleCache\CacheInterface $cache
 */

/** @var \Doctrine\DBAL\Connection $connection */
$connection = $connector-&gt;getConnection('Default-Connection');

$count   = $connection->fetchColumn('SELECT COUNT(*) FROM app_todo');
$entries = $connection->fetchAll('SELECT * FROM app_todo WHERE status = 1 ORDER BY insertDate DESC LIMIT 16');

return $response->build(200, [], [
    'totalResults' => $count,
    'entry' => $entries,
]);</code></pre>
    
    <p>In the code we get the Default-Connection which we have defined 
    previously in our .fusio.yml deploy file. In this case the connection 
    returns a <code>Doctrine\DBAL\</code> Connection instance but we have 
    already many adapters to connect to different services. Then we simply fire 
    some queries and return the response.</p>
  </div>
</div>

<div class="fusio-content mdl-grid">
  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Media</div>
      <div class="mdl-card__supporting-text">
      If you are a blogger or magazine we would be happy if you like to cover
      Fusio. You can <a href="<?php echo $base; ?>/media/fusio_icon.zip">download</a>
      the official icon set to represent Fusio. In case you have any questions
      please write us a message directly so we can help you to create great content.
      </div>
    </div>
  </div>
  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Donations</div>
      <div class="mdl-card__supporting-text">
        If this project helps you to generate revenue or in general if you like
        to support the project you can donate any amount through paypal. We like
        to thank every user who has donated to the project.
        <div style="text-align:center">
          <a href="https://www.paypal.me/fusioapi">
            <img src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="fusio-content mdl-grid">
  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Consulting</div>
      <div class="mdl-card__supporting-text">
        If you are a company or freelancer and want to get detailed information
        how you can use Fusio you can <a href="<?php echo $router->getAbsolutePath('Fusio\Website\Application\Contact::doIndex'); ?>">contact us</a>
        for consulting. In the workshop we try to find the best way how you can
        use/integrate Fusio also we try to explain the functionality and answer
        your questions.
      </div>
    </div>
  </div>
  <div class="mdl-cell mdl-cell--6-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Community</div>
      <div class="mdl-card__supporting-text">
        <img src="<?php echo $base; ?>/img/community.png" class="fusio-avatar" />
        If you like to contribute to the project please check the contribution
        guide on <a href="https://github.com/apioo/fusio">GitHub</a>.
      </div>
    </div>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
