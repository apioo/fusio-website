<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-intro">
  <div class="fusio-content mdl-grid">
    <div class="mdl-cell mdl-cell--12-col">
      <h1 class="mdl-typography--display-3" style="text-align:center;">Open Source API Management</h1>
      <p class="mdl-typography--subhead" style="text-align:center;">Fusio is an open source API management platform which helps to build and manage REST APIs.
      Through Fusio you can quickly build a state of the art API, set up a developer portal and monetize your API.</p>
      <div class="fusio-call-for-action">
        <a href="#" id="subscribe" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">Subscribe</a>
        <a href="<?php echo $router->getAbsolutePath('Fusio\Website\Application\Demo::doIndex'); ?>" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">Demo</a>
        <a href="<?php echo $base; ?>/static/Fusio_Flyer.pdf" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">Flyer</a>
      </div>
    </div>
  </div>
</div>

<div class="mdl-color--grey-800">
  <div class="fusio-content mdl-grid">
    <div class="mdl-cell mdl-cell--4-col" style="text-align:center;">
      <img src="<?php echo $base; ?>/img/youtube-32.png" alt="Youtube">
      &nbsp;
      <a href="https://www.youtube.com/c/FusioAPI" class="mdl-color-text--grey">Fusio on Youtube</a>
    </div>
    <div class="mdl-cell mdl-cell--4-col" style="text-align:center;">
      <img src="<?php echo $base; ?>/img/github-32.png" alt="Github">
      &nbsp;
      <a href="https://github.com/apioo/fusio" class="mdl-color-text--grey">Fusio on Github</a>
    </div>
    <div class="mdl-cell mdl-cell--4-col" style="text-align:center;">
      <img src="<?php echo $base; ?>/img/twitter-32.png" alt="Twitter">
      <a href="https://twitter.com/FusioAPI" class="mdl-color-text--grey">@FusioAPI on Twitter</a>
    </div>
  </div>
</div>

<div style="background-color:#fff">
  <div class="fusio-content mdl-grid">
    <div class="mdl-cell mdl-cell--6-col">
      <div class="mdl-card mdl-shadow--2dp" style="width: 100%">
        <div class="mdl-card__title" style="background:url('<?php echo $base; ?>/img/cards/backend_routes.png') center / cover;height:150px;color:white">
          <h2 class="mdl-card__title-text">Backend</h2>
        </div>
        <div class="mdl-card__supporting-text">
          <p>Fusio provides a simple to use and intuitive backend. Through the backend it is possible to control and manage the complete API.</p>
        </div>
      </div>
    </div>
    <div class="mdl-cell mdl-cell--6-col">
      <div class="mdl-card mdl-shadow--2dp" style="width: 100%">
        <div class="mdl-card__title" style="background:url('<?php echo $base; ?>/img/cards/developer_index.png') center / cover;height:150px;color:white">
          <h2 class="mdl-card__title-text">Developer-Portal</h2>
        </div>
        <div class="mdl-card__supporting-text">
          <p>Fusio provides a ready to use developer portal app which you can use to set up your API program. This is the place where developers can register to consume your API.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div>
  <div class="fusio-content mdl-grid">
    <div class="mdl-cell mdl-cell--6-col">
      <div class="mdl-card mdl-shadow--2dp" style="width: 100%">
        <div class="mdl-card__title" style="background:url('<?php echo $base; ?>/img/cards/backend_action.png') center / cover;height:150px;color:white">
          <h2 class="mdl-card__title-text">Development</h2>
        </div>
        <div class="mdl-card__supporting-text">
          <p>Fusio contains many actions which you can use out of the box to solve various tasks. I.e. to proxy HTTP requests to an internal API or generate an API based on a database table. This means you can build APIs in a Low-Code style without the need to write complex code.</p>
        </div>
      </div>
    </div>
    <div class="mdl-cell mdl-cell--6-col">
      <div class="mdl-card mdl-shadow--2dp" style="width: 100%">
        <div class="mdl-card__title" style="background:url('<?php echo $base; ?>/img/cards/worker.png') center / cover;height:150px;color:white">
          <h2 class="mdl-card__title-text">Worker</h2>
        </div>
        <div class="mdl-card__supporting-text">
          <p>Fusio contains a Worker-System which allows you to develop actions in different programming languages, Fusio currently supports Java, Javascript, PHP and Python. This means your developers can choose the language of choice to implement your backend logic.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="background-color:#fff">
  <div class="fusio-content mdl-grid">
    <div class="mdl-cell mdl-cell--6-col">
      <div class="mdl-card mdl-shadow--2dp" style="width: 100%">
        <div class="mdl-card__title" style="background:url('<?php echo $base; ?>/img/cards/developer_plan.png') center / cover;height:150px;color:white">
          <h2 class="mdl-card__title-text">Monetization</h2>
        </div>
        <div class="mdl-card__supporting-text">
          <p>At the backend of Fusio it is possible to create multiple Plans. A Plan can then be purchased by a user at the developer portal.</p>
          <p>Through a purchase a user receives points. Those points can then be spent to call protected API routes. At the backend you can configure how much a call to a route costs.</p>
        </div>
      </div>
    </div>
    <div class="mdl-cell mdl-cell--6-col">
      <div class="mdl-card mdl-shadow--2dp" style="width: 100%">
        <div class="mdl-card__title" style="background:url('<?php echo $base; ?>/img/cards/marketplace.png') center / cover;height:150px;color:white">
          <h2 class="mdl-card__title-text">Marketplace</h2>
        </div>
        <div class="mdl-card__supporting-text">
          <p>Fusio provides an <a href="<?php echo $router->getAbsolutePath('Fusio\Website\Application\Marketplace::doIndex'); ?>">Apps Marketplace</a> where you can install different apps for your API.</p>
          <p>An App is mostly a simple Javascript app which provides specific functionality. The previously mentioned backend and developer app are also only apps which work with the internal API of Fusio.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div>
  <div class="fusio-content mdl-grid" itemscope itemtype="http://schema.org/ItemList">
    <div class="mdl-cell mdl-cell--4-col fusio-index-badge" itemprop="itemListElement" itemscope itemtype="http://schema.org/Text">
      <meta itemprop="position" content="1" />
      <div class="fusio-index-badge-circle"><i class="material-icons fusio-tab-icon">build</i></div>
      <h4 itemprop="name">API management</h4>
      <p class="mdl-typography--subhead" itemprop="description">Fusio provides a powerful 
      <a href="<?php echo $router->getAbsolutePath('Fusio\Website\Application\Demo::doIndex'); ?>">backend</a> 
      app to control and monitor your API.</p>
    </div>
    <div class="mdl-cell mdl-cell--4-col fusio-index-badge" itemprop="itemListElement" itemscope itemtype="http://schema.org/Text">
      <meta itemprop="position" content="2" />
      <div class="fusio-index-badge-circle"><i class="material-icons fusio-tab-icon">assessment</i></div>
      <h4 itemprop="name">Developer portal</h4>
      <p class="mdl-typography--subhead" itemprop="description">Fusio provides a <a href="http://demo.fusio-project.org/developer/">developer portal</a>
      app where developer can register to use your API.</p>
    </div>
    <div class="mdl-cell mdl-cell--4-col fusio-index-badge" itemprop="itemListElement" itemscope itemtype="http://schema.org/Text">
      <meta itemprop="position" content="3" />
      <div class="fusio-index-badge-circle"><i class="material-icons fusio-tab-icon">book</i></div>
      <h4 itemprop="name">Documentation</h4>
      <p class="mdl-typography--subhead" itemprop="description">Fusio provides a 
      <a href="http://demo.fusio-project.org/documentation/#!/api/todo">documentation</a>
      app which shows all available API endpoints.</p>
    </div>
    <div class="mdl-cell mdl-cell--4-col fusio-index-badge" itemprop="itemListElement" itemscope itemtype="http://schema.org/Text">
      <meta itemprop="position" content="4" />
      <div class="fusio-index-badge-circle"><i class="material-icons fusio-tab-icon">monetization_on</i></div>
      <h4 itemprop="name">Monetization</h4>
      <p class="mdl-typography--subhead" itemprop="description">Fusio provides a simple payment system
      to charge for specific routes.</p>
    </div>
    <div class="mdl-cell mdl-cell--4-col fusio-index-badge" itemprop="itemListElement" itemscope itemtype="http://schema.org/Text">
      <meta itemprop="position" content="5" />
      <div class="fusio-index-badge-circle"><i class="material-icons fusio-tab-icon">account_box</i></div>
      <h4 itemprop="name">OAuth2 authorization</h4>
      <p class="mdl-typography--subhead" itemprop="description">App developer can obtain an access token
      to access non-public API endpoints.</p>
    </div>
    <div class="mdl-cell mdl-cell--4-col fusio-index-badge" itemprop="itemListElement" itemscope itemtype="http://schema.org/Text">
      <meta itemprop="position" content="6" />
      <div class="fusio-index-badge-circle"><i class="material-icons fusio-tab-icon">swap_horiz</i></div>
      <h4 itemprop="name">Rate limiting</h4>
      <p class="mdl-typography--subhead" itemprop="description">Fusio provides a way to rate limit requests based on the user or app.</p>
    </div>
    <div class="mdl-cell mdl-cell--4-col fusio-index-badge" itemprop="itemListElement" itemscope itemtype="http://schema.org/Text">
      <meta itemprop="position" content="7" />
      <div class="fusio-index-badge-circle"><i class="material-icons fusio-tab-icon">cloud_queue</i></div>
      <h4 itemprop="name">Schema generation</h4>
      <p class="mdl-typography--subhead" itemprop="description">Fusio provides an endpoint to automatically
        generate <a href="https://www.openapis.org/">OAI</a> and <a href="https://raml.org/">RAML</a> specifications.</p>
    </div>
    <div class="mdl-cell mdl-cell--4-col fusio-index-badge" itemprop="itemListElement" itemscope itemtype="http://schema.org/Text">
      <meta itemprop="position" content="8" />
      <div class="fusio-index-badge-circle"><i class="material-icons fusio-tab-icon">device_hub</i></div>
      <h4 itemprop="name">Subscription support</h4>
      <p class="mdl-typography--subhead" itemprop="description">Fusio contains a subscription layer which helps to build pub/sub for your API.</p>
    </div>
    <div class="mdl-cell mdl-cell--4-col fusio-index-badge" itemprop="itemListElement" itemscope itemtype="http://schema.org/Text">
      <meta itemprop="position" content="9" />
      <div class="fusio-index-badge-circle"><i class="material-icons fusio-tab-icon">label_outline</i></div>
      <h4 itemprop="name">SDK generation</h4>
      <p class="mdl-typography--subhead" itemprop="description">Fusio can automatically generate a client SDK
      for your API based on the defined schema.</p>
    </div>
  </div>
</div>

<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "SoftwareApplication",
    "name": "Fusio",
    "description": "Fusio is an open source API management platform which helps to build and manage REST APIs. Through Fusio you can quickly build a state of the art API, set up a developer portal and monetize your API.",
    "url": "https://www.fusio-project.org/",
    "applicationCategory": "API Management",
    "downloadUrl": "https://www.fusio-project.org/download",
    "license": "https://github.com/apioo/fusio/blob/master/LICENSE",
    "operatingSystem": "Windows, Linux, OSX"
  }
</script>

<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
<script type="text/javascript">
function showDialog() {
  window.dojoRequire(["mojo/signup-forms/Loader"], function(L) {
    L.start({"baseUrl":"mc.us20.list-manage.com","uuid":"13a030c73b877188ebe28f86f","lid":"8706c1f9e7","uniqueMethods":true});
    document.cookie = "MCPopupClosed=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/";
  });
}
document.getElementById("subscribe").onclick = showDialog;
</script>

<?php include(__DIR__ . '/inc/footer.php'); ?>
