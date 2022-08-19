<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>About</h4>
    <p>Fusio is an open source API management platform which helps to build and manage RESTful APIs. We think that there
    is a huge potential in the API economy. Whether you need an API to expose your business functionality, develop
    one-page web applications, mobile-apps or microservices. Because of this we think that Fusio is a great tool to
    build such APIs.</p>
    <p>We also truly believe in open source software. Fusio is a solution which is open source and self-hosted to
    protect you from vendor lock-in. Today there are many cloud solutions available which lock you in to a specific
    platform. With Fusio you have the freedom to choose the fitting hosting environment which can be either a simple
    virtual server or an autoscaling environment in the cloud.</p>
    <p>If you like the project and want to see it grow please checkout the <a href="https://github.com/apioo/fusio">repository</a>.</p>
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
    <a href="<?php echo $router->getAbsolutePath(\App\Website\Adapter::class); ?>">connection</a>
    to support any kind of service.</p>

    <p>The API can then be used by apps which are developed by yourself or by 
    3rd party developers. The apps can be i.e. javascript apps (like Angular,
    React, Vue etc.), mobile apps or actual desktop apps which need to communicate
    with your API. The Fusio backend app uses also an internal API to configure 
    the system. Because of that it is also very easy to integrate Fusio into an 
    existing system, since you actually could also configure the complete system 
    through the API.</p>
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
        how you can use Fusio you can <a href="<?php echo $router->getAbsolutePath(\App\Website\Contact::class); ?>">contact us</a>
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
        If you like to contribute to the project please visit our <a href="https://github.com/apioo/fusio">repository</a>.
        To improve the documentation you can also take a look at <a href="https://docs.fusio-project.org/">documentation</a> repository.
      </div>
    </div>
  </div>
</div>

<div class="fusio-content fusio-edit mdl-grid">
  <div class="mdl-cell mdl-cell--12-col">
    <a href="https://github.com/apioo/fusio-website/blob/main/src/Website/resource/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="material-icons" style="">edit</i> Edit this page</a>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
