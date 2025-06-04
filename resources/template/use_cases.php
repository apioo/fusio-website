<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Use-Cases</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h2 id="api-product" class="fusio-sub-headline h4 fw-normal">🌐 API Product: Transform Legacy Systems into Modern API Offerings</h2>
      <p class="lead">Fusio enables you to expose your existing web application's business logic through modern RESTful APIs. By integrating Fusio, you can:</p>
      <ul class="fusio-list lead">
        <li>Create a developer portal for onboarding and managing API consumers.</li>
        <li>Leverage built-in authentication methods, including email and social logins.</li>
        <li>Monetize your APIs with integrated payment systems.</li>
      </ul>
      <p class="lead">This approach allows for seamless integration with your current infrastructure, providing a state-of-the-art API experience for your users.</p>
      <div class="btn-group btn-group-lg">
        <a href="https://youtu.be/aq4pI0LIBFc" class="btn btn-primary">Video</a>
        <a href="https://docs.fusio-project.org/docs/use_cases/api_product/" class="btn btn-secondary">Documentation</a>
      </div>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 id="api-gateway" class="fusio-sub-headline h4 fw-normal">🔐 API Gateway: Centralize and Secure Your Microservices</h2>
        <p class="lead">Acting as a centralized API gateway, Fusio offers:</p>
        <ul class="fusio-list lead">
          <li>A single entry point for all internal APIs and microservices.</li>
          <li>Comprehensive monitoring and analytics of API traffic.</li>
          <li>Advanced features like rate limiting, authorization, and monetization.</li>
          <li>Automatic generation of OpenAPI specifications and client SDKs through its schema store.</li>
        </ul>
        <p class="lead">This centralized approach simplifies API management and enhances security across your services.</p>
        <div class="btn-group btn-group-lg">
          <a href="https://youtu.be/S-mneuDPNzg" class="btn btn-primary">Video</a>
          <a href="https://docs.fusio-project.org/docs/use_cases/api_gateway/" class="btn btn-secondary">Documentation</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h2 id="spa-backend" class="fusio-sub-headline h4 fw-normal">🖥️ SPA Backend: Powering Single-Page Applications with Robust APIs</h2>
      <p class="lead">Fusio serves as an efficient backend for single-page applications (SPAs) built with frameworks like Angular, React, or Vue. Key benefits include:</p>
      <ul class="fusio-list lead">
        <li>Automatic generation of type-safe JavaScript client SDKs.</li>
        <li>Simplified creation of CRUD endpoints using the entity generator.</li>
        <li>Support for authentication and authorization mechanisms.</li>
      </ul>
      <p class="lead">This setup provides a self-hosted alternative to platforms like Firebase or Supabase, offering greater control and customization.</p>
      <div class="btn-group btn-group-lg">
        <a href="https://youtu.be/syRmovex3rE" class="btn btn-primary">Video</a>
        <a href="https://docs.fusio-project.org/docs/use_cases/spa_backend/" class="btn btn-secondary">Documentation</a>
      </div>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 id="api-builder" class="fusio-sub-headline h4 fw-normal">⚙️ API Builder: Rapid API Generation from Diverse Data Sources</h2>
        <p class="lead">With Fusio's API Builder, you can swiftly create RESTful APIs from various data sources, including:</p>
        <ul class="fusio-list lead">
          <li>Relational databases (MySQL, PostgreSQL).</li>
          <li>NoSQL databases (MongoDB, Elasticsearch).</li>
          <li>File systems and directories.</li>
          <li>Existing OpenAPI or Postman specifications.</li>
        </ul>
        <p class="lead">The platform's generators automate the creation of routes, actions, and schemas, accelerating development and reducing manual effort.</p>
        <div class="btn-group btn-group-lg">
          <a href="https://docs.fusio-project.org/docs/use_cases/api_builder/" class="btn btn-secondary">Documentation</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h2 id="api-framework" class="fusio-sub-headline h4 fw-normal">🛠️ API Framework: Build Custom APIs from the Ground Up</h2>
      <p class="lead">For complex or unique requirements, Fusio functions as a comprehensive API framework, allowing you to:</p>
      <ul class="fusio-list lead">
        <li>Develop custom actions using PHP or other supported languages.</li>
        <li>Utilize a deployment system to manage configurations via YAML files.</li>
        <li>Implement a recommended folder structure for organized project management.</li>
      </ul>
      <p class="lead">This flexibility ensures that you can tailor your API solutions to meet specific business needs.</p>
      <div class="btn-group btn-group-lg">
        <a href="https://youtu.be/2E9YnAaXq5s" class="btn btn-primary">Video</a>
        <a href="https://docs.fusio-project.org/docs/use_cases/api_framework/" class="btn btn-secondary">Documentation</a>
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
