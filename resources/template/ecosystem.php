<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Ecosystem</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center lead">Besides our core product, we offer additional services to augment the functionality of Fusio.</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
    <div class="container">
      <div class="row">
        <div class="col">
            <h2 id="marketplace" class="fusio-sub-headline h4 fw-normal"><i class="bi bi-shop-window"></i> <a href="https://www.fusio-project.org/marketplace">Marketplace</a></h2>
            <p class="lead mb-5">The Fusio marketplace is the place to share apps and actions with other Fusio users,
            it helps to quickly build your API by using existing code from other users. You can register and configure
            the credentials at your local Fusio installation under System / Config s. <code>marketplace_client_id</code>
            and <code>marketplace_client_secret</code> then you can use the panel under Development / Marketplace to
            install apps or actions.</p>

            <h2 id="sdkgen" class="fusio-sub-headline h4 fw-normal"><i class="bi bi-archive-fill"></i> <a href="https://sdkgen.app/">SDKgen</a></h2>
            <p class="lead mb-5">SDK as a service platform which helps you to generate client SDKs for your API in
            different languages like <code>CSharp</code>, <code>Go</code>, <code>Java</code> and <code>Python</code>
            which helps your customers to interact with your API. Therefor you need to register at the SDKgen app and
            provide the credentials under System / Config s. <code>sdkgen_client_id</code> and <code>sdkgen_client_secret</code>.
            Then you can generate the SDK directly at the backend under Development / SDK.</p>

            <h2 id="typehub" class="fusio-sub-headline h4 fw-normal"><i class="bi bi-box-fill"></i> <a href="https://typehub.cloud/">TypeHub</a></h2>
            <p class="lead mb-5">API and data design platform, basically you can push your API specification to this
            platform so that users can simply discover your API. It tracks all changes of your API so that you have
            always a clean history how your API evolves.</p>

            <h2 id="apigen" class="fusio-sub-headline h4 fw-normal"><i class="bi bi-gear"></i> <a href="https://apigen.app/">APIgen</a></h2>
            <p class="lead mb-5">Service which generates fully working Fusio APIs based on a data model. It also
            includes a simple Angular frontend app to CRUD your models. It can be seen as low-code generator to quickly
            generate CRUD APIs but the generated code is clean and can be also used as foundation for your next app.</p>

            <h2 id="apimon" class="fusio-sub-headline h4 fw-normal"><i class="bi bi-search"></i> <a href="https://apimon.app/">APImon</a></h2>
            <p class="lead mb-5">Simple API monitoring service which helps to monitor your Fusio installation. It is
            optimized for Fusio, but it can be also used for different API endpoints. APImon invokes your endpoints in
            specific intervals and notifies you about changes. It also includes an uptime page for your users for
            example take a look at the <a href="https://api.apimon.app/status/fusio_marketplace">uptime page</a> of the
            marketplace API.</p>
        </div>
      </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center lead">The following list shows interesting open-source projects related to Fusio.</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="row row-cols-1 row-cols-md-3 text-center">
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal">Fusio</h2>
          </div>
          <div class="card-body">
            <div class="d-inline-flex align-items-center justify-content-center text-bg-dark bg-gradient fs-2 mb-3 rounded-5">
              <i class="bi bi-house p-4"></i>
            </div>
            <p>Self-Hosted API Management for Builders.</p>
            <a href="https://github.com/apioo/fusio" class="btn btn-primary">GitHub</a>
            <a href="https://docs.fusio-project.org/" class="btn btn-secondary">Docs</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal">Framework</h2>
          </div>
          <div class="card-body">
            <div class="d-inline-flex align-items-center justify-content-center text-bg-dark bg-gradient fs-2 mb-3 rounded-5">
              <i class="bi bi-play-circle-fill p-4"></i>
            </div>
            <p>Starter repository to use Fusio as a framework.</p>
            <a href="https://github.com/apioo/fusio-framework" class="btn btn-primary">GitHub</a>
            <a href="https://docs.fusio-project.org/docs/ecosystem/framework" class="btn btn-secondary">Docs</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal">Plant</h2>
          </div>
          <div class="card-body">
            <div class="d-inline-flex align-items-center justify-content-center text-bg-dark bg-gradient fs-2 mb-3 rounded-5">
              <i class="bi bi-server p-4"></i>
            </div>
            <p>Plant is a server panel to easily self-host Fusio and other apps on your server.</p>
            <a href="https://github.com/apioo/fusio-plant" class="btn btn-primary">GitHub</a>
            <a href="https://docs.fusio-project.org/docs/ecosystem/plant" class="btn btn-secondary">Docs</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal">PSX</h2>
          </div>
          <div class="card-body">
            <div class="d-inline-flex align-items-center justify-content-center text-bg-dark bg-gradient fs-2 mb-3 rounded-5">
              <i class="bi bi-wrench p-4"></i>
            </div>
            <p>An innovative PHP framework dedicated to build fully typed REST APIs.</p>
            <a href="https://phpsx.org/" class="btn btn-primary">Website</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal">TypeSchema</h2>
          </div>
          <div class="card-body">
            <div class="d-inline-flex align-items-center justify-content-center text-bg-dark bg-gradient fs-2 mb-3 rounded-5">
              <i class="bi bi-file-post p-4"></i>
            </div>
            <p>A JSON format to describe data models in a language neutral format.</p>
            <a href="https://typeschema.org/" class="btn btn-primary">Website</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h2 class="my-0 fw-normal">TypeAPI</h2>
          </div>
          <div class="card-body">
            <div class="d-inline-flex align-items-center justify-content-center text-bg-dark bg-gradient fs-2 mb-3 rounded-5">
              <i class="bi bi-droplet-fill p-4"></i>
            </div>
            <p>An OpenAPI alternative to describe REST APIs for type-safe code generation.</p>
            <a href="https://typeapi.org/" class="btn btn-primary">Website</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col text-end">
      <a href="https://github.com/apioo/fusio-website/blob/main/resources/template/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="bi bi-pen-fill"></i> Edit this page</a>
    </div>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
