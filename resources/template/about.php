<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">About</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h2 class="fusio-sub-headline h4 fw-normal">💡 Why Choose Fusio?</h2>
      <ul class="fusio-list lead">
        <li><b>Open Source & Self-Hosted</b>: Avoid vendor lock-in with a platform you can host on your own infrastructure, giving you full control over your API ecosystem.</li>
        <li><b>Comprehensive API Management</b>: From backend services to developer portals, Fusio offers a complete suite of tools to manage your APIs effectively.</li>
        <li><b>Flexible Architecture</b>: Connect to various backend services like databases, message queues, or other APIs. Easily implement custom connections to support third-party services.</li>
        <li><b>Developer-Friendly</b>: Fusio's internal API allows for seamless integration into existing systems, enabling configuration and management through API calls.</li>
      </ul>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="fusio-sub-headline h4 fw-normal">🌟 Key Features</h2>
        <ul class="fusio-list lead">
          <li><b>API Builder</b>: Automatically generate REST APIs based on different data sources, including relational databases and NoSQL systems.</li>
          <li><b>Developer Portal</b>: Provide a dedicated portal where developers can register, obtain access tokens, and manage their applications.</li>
          <li><b>Monetization</b>: Implement a simple payment system to charge for specific API routes, opening new revenue streams.</li>
          <li><b>Rate Limiting</b>: Control the number of requests to your API based on user or application, ensuring fair usage and protecting resources.</li>
          <li><b>SDK Generation</b>: Automatically generate client SDKs for your API based on defined schemas, facilitating easier integration for developers.</li>
          <li><b>Schema Generation</b>: Generate OpenAPI and TypeAPI specifications to provide clear documentation and support for your API consumers.</li>
          <li><b>Webhook Support</b>: Implement a publish/subscribe pattern for your API using Fusio's webhook system, enabling real-time notifications.</li>
          <li><b>OAuth2 Authorization</b>: Secure your APIs by allowing developers to obtain access tokens for non-public endpoints.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h2 class="fusio-sub-headline h4 fw-normal">🧭 Getting Started</h2>
      <p class="lead">To begin your journey with Fusio:</p>
      <ul class="fusio-list lead">
        <li><b>Explore the <a href="https://docs.fusio-project.org/">Documentation</a></b>: Comprehensive guides to help you set up and utilize Fusio effectively.</li>
        <li><b>Visit the <a href="<?php echo $router->getAbsolutePath([\App\Controller\Marketplace::class, 'show']); ?>">Marketplace</a></b>: Discover apps and actions to extend Fusio's functionality.</li>
        <li><b>Check Out the <a href="<?php echo $router->getAbsolutePath([\App\Controller\Demo::class, 'show']); ?>">Demo</a></b>: Experience Fusio firsthand through a hosted demo environment.</li>
        <li><b>Download Fusio</b>: Get the latest version from the <a href="<?php echo $router->getAbsolutePath([\App\Controller\Download::class, 'show']); ?>">Download Page</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="fusio-sub-headline h4 fw-normal">🤝 Join the Community</h2>
        <p class="lead">Fusio thrives on community collaboration. Whether you're a developer, blogger, or company, there are numerous ways to get involved:</p>
        <ul class="fusio-list lead">
          <li><b>Contribute</b>: Visit our <a href="https://github.com/apioo/fusio">GitHub repository</a> to contribute code, report issues, or suggest features.</li>
          <li><b>Engage</b>: Join discussions on <a href="https://discord.gg/eMrMgwsc6e">Discord</a> or follow us on <a href="https://twitter.com/FusioAPI">Twitter</a> and <a href="https://www.youtube.com/c/FusioAPI">YouTube</a>.</li>
          <li><b>Support</b>: Consider <a href="https://github.com/apioo/fusio">donating</a> to help sustain and grow the project.</li>
          <li><b>Consulting</b>: For businesses seeking tailored solutions, <a href="https://www.fusio-project.org/contact">contact us</a> for consulting services.</li>
        </ul>
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
