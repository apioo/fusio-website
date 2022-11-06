<?php include(__DIR__ . '/inc/header.php'); ?>

<div style="background-image:url('<?php echo $base; ?>/img/intro.jpg');background-size:cover">
  <div class="container">
    <div class="row">
      <div class="col p-lg-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Use-Cases</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h2 id="api-product" class="display-6 fw-normal">API-Product</h2>
      <p>The initial use case of Fusio was to be able to quickly create a great API product beside an existing
        web app. We have many users which run a traditional web app and they use Fusio to create a state of the
        art API beside there existing product. Fusio provides many ways to make your business logic available
        as API.</p>
      <p>Fusio provides a <a href="https://demo.fusio-project.org/apps/developer/#!/">developer app</a>
        which helps to on board new users to use your API. You can customize this app or it is also possible to
        completely integrate Fusio into your existing product since the app also only works with the internal Fusio API.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 id="api-gateway" class="display-6 fw-normal">API-Gateway</h2>
        <p>You can use Fusio as API-Gateway. In this case Fusio acts as the single entrypoint for all your
          internal APIs / microservices. Through this you get a complete overview about your API landscape and
          you can cover topics like authorization, rate limiting, sdk generation.</p>
        <p>Fusio contains also a schema store which then contains all schema data for each request and response.
          Based on these schemas Fusio can automatically generate an OpenAPI specification or also client SDKs.</p>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h2 id="spa-backend" class="display-6 fw-normal">SPA-Backend</h2>
      <p>You can use Fusio as backend to build <abbr title="Single-Page-Application">SPAs</abbr> using popular
        Javascript-Frameworks like i.e. Angular, React or Vue. Fusio is especially designed to work with Angular,
        it provides an <a href="https://www.npmjs.com/package/ngx-fusio-sdk">SDK</a> which can use the automatically
        generate SDK to build a complete type safe app.</p>
      <p>In this sense Fusio can be seen as a self-hosted alternative solution to services like Firebase. We also
        provide a general <a href="https://www.npmjs.com/package/fusio-sdk">Javascript SDK</a> which you can use for
        any javascript app.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 id="low-code-platform" class="display-6 fw-normal">Low-Code-Platform</h2>
        <p>You can use Fusio as a Low-Code-Platform. This means that also beginners can use Fusio to build great
          state-of-the-art APIs. In this case the user uses Fusio more like a CMS and builds all routes
          and endpoints through the backend app. With Fusio we want to enable all developers to create great APIs,
          in this sense Fusio tries to be the Wordpress for API developers.</p>
        <p>Fusio provides already many actions to solve common problems without coding</p>
        <!--<a href="#"><img src="<?php echo $base; ?>/img/use_cases/action.png" width="100%"></a>-->
        <p>If such an action does not solve your problem you can write your backend logic in a custom action.
          Fusio supports multiple programming languages like Java, Javascript, PHP and Python so you can choose
          the tools which you know the most. We also provide a VSCode extension which allows you to connect to
          a remote Fusio instance and develop those extensions directly at the VSCode editor.</p>
        <!--<a href="https://marketplace.visualstudio.com/items?itemName=Fusio.fusio"><img src="<?php echo $base; ?>/img/use_cases/vscode.png" width="100%"></a>-->
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h2 id="api-framework" class="display-6 fw-normal">API-Framework</h2>
      <p>You can use Fusio also simply as framework to build an API from scratch. In this case you can develop custom
        actions and use the deploy mechanism. Please take a look at our <a href="https://github.com/apioo/fusio-sample-cms">sample headless CMS</a>
        which shows how to build and structure a complex app using Fusio.</p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col text-end">
      <a href="https://github.com/apioo/fusio-website/blob/main/src/Website/resource/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="bi bi-pen-fill"></i> Edit this page</a>
    </div>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
