<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-lg-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to Kong</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h4>Technology</h4>
      <p><a href="https://konghq.com/">Kong</a> is written in Lua and extends <a href="https://github.com/openresty">OpenResty</a>
      which extends NGINX with LuaJIT. Kong provides many API related features like i.e. a Developer-Portal to onboard
      new users for your API, unfortunately this and also some other features are not available at the open-source
      product and can be only used with Kong-Enterprise.</p>
      <p>Fusio is fully open-source this means we have only one product where all features like the developer portal are
      contained. Fusio can also work with NGINX since it is a plain PHP application. Another great feature
      of Fusio is the possibility to automatically generate a client SDK for your API.</p>
      <h4>Fusio</h4>
      <ul>
        <li>Written in PHP and usable with different web-servers like Nginx or Apache.</li>
        <li>Easy self-hosting on a simple VHost or large cloud provider</li>
        <li>API Gateway features like Authorization, Analytics, Rate-Limiting</li>
        <li>API Monetization</li>
        <li>Developer portal to onboard new developers</li>
        <li>Provides Javascript, PHP, Java, Go and Angular SDKs</li>
      </ul>
      <h4>Kong</h4>
      <ul>
        <li>Well-known API gateway solution</li>
        <li>Written as Lua Plugin for Nginx</li>
        <li>Open-source and enterprise offerings</li>
        <li>OpenTelemetry</li>
        <li>Basic Traffic Control Plugins</li>
        <li>Simple Data Transformations</li>
      </ul>
    </div>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col text-end">
            <a href="https://github.com/apioo/fusio-website/blob/main/resources/template/compare/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="bi bi-pen-fill"></i> Edit this page</a>
        </div>
    </div>
</div>

<?php include(__DIR__ . '/../inc/footer.php'); ?>
