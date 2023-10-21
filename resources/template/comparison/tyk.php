<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-lg-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to Tyk</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h4>Technology</h4>
      <p><a href="https://tyk.io/">Tyk</a> is written in Go and is optimized for performance. If your main requirement
      is performance you should probably take a look at Tyk, while Fusio has also a great performance it can not match
      with Tyk. At Tyk only the actual API Gateway is complete open-source, if you want to use the Developer-Portal
      or Backend-Admin UI component you need to buy a license. Tyk provides also a way to write plugins to add
      additional logic.</p>
      <p>Fusio provides out-of-the boy many actions to handle common endpoint logic and it is also easy possible to
      implement a custom logic. Fusio is completely open-source and we provide only one product which contains all
      features. Fusio also goes beyond the classical API Gateway feature scope and handles topics like API monetization
      and SDK generation.</p>
      <h4>Fusio</h4>
      <ul>
        <li>Implement action logic in different programming languages</li>
        <li>Simple setup which can be easily managed</li>
        <li>API Gateway features like Authorization, Analytics, Rate-Limiting</li>
        <li>API monetization</li>
        <li>Developer portal to onboard new developers</li>
        <li>Provides Javascript, PHP, Java, Go and Angular SDKs</li>
      </ul>
      <h4>Tyk</h4>
      <ul>
        <li>Written in Go for great performance</li>
        <li>Only the API Gateway is open-source</li>
        <li>API Analytics</li>
        <li>Supports GraphQL federation natively</li>
        <li>Native support for Kubernetes</li>
        <li>Extensibility in any language</li>
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
