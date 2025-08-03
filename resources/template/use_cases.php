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
      <h2 id="api-product" class="fusio-sub-headline h4 fw-normal">🌐 API Product: Transform Legacy Systems into Modern APIs</h2>
      <p class="lead">Fusio helps you turn your existing web apps into modern, easy-to-use RESTful APIs. With Fusio, you can:</p>
      <ul class="fusio-list lead">
        <li>Build a developer portal to onboard and manage API users.</li>
        <li>Use built-in login options, including email and social media accounts.</li>
        <li>Monetize your APIs with payment system support.</li>
        <li>Support for <abbr title="Model Context Protocol">MCP</abbr>, allowing developers to explore and use your API through natural language with LLMs.</li>
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
        <p class="lead">Fusio acts as a central entry point for all your APIs and microservices. It helps you:</p>
        <ul class="fusio-list lead">
          <li>Route all internal APIs through one secure gateway.</li>
          <li>Monitor and analyze API traffic in one place.</li>
          <li>Use built-in tools like rate limiting, access control, and monetization.</li>
          <li>Automatically generate OpenAPI documentation and client SDKs.</li>
        </ul>
        <p class="lead">This makes it easier to manage your APIs and keep your services secure and organized.</p>
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
      <h2 id="spa-backend" class="fusio-sub-headline h4 fw-normal">🖥️ SPA Backend: Power Your Single-Page App with a Flexible API</h2>
      <p class="lead">Fusio is a powerful backend solution for single-page applications built with <a href="https://angular.dev/">Angular</a>, <a href="https://react.dev/">React</a>, <a href="https://vuejs.org/">Vue</a>, and more. With Fusio, you get:</p>
      <ul class="fusio-list lead">
        <li>Automatically generated JavaScript clients with type checking for safer development.</li>
        <li>Simple tools to create <abbr title="Create, Read, Update, Delete">CRUD</abbr> API endpoints.</li>
        <li>Built-in support for user authentication and access control.</li>
        <li>Trigger real-time updates or external services through an HTTP webhook event system that responds to API actions.</li>
      </ul>
      <p class="lead">Fusio offers a self-hosted alternative to Firebase or Supabase, giving you full control over how your backend works and how your data is managed.</p>
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
        <h2 id="api-builder" class="fusio-sub-headline h4 fw-normal">⚙️ API Builder: Quickly Generate APIs from Your Data</h2>
        <p class="lead">Using the API Builder in Fusio, you can quickly turn your data into working RESTful APIs using sources like:</p>
        <ul class="fusio-list lead">
          <li>Relational databases (MySQL, PostgreSQL)</li>
          <li>NoSQL databases (MongoDB, Elasticsearch)</li>
          <li>File systems or local directories</li>
          <li>Existing API definitions (OpenAPI or Postman files)</li>
        </ul>
        <p class="lead">Fusio automatically creates the API endpoints, logic, and data structure, helping you save time and avoid repetitive coding.</p>
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
      <p class="lead">Fusio offers a powerful yet developer-friendly API framework that helps you build advanced APIs with ease. You can:</p>
      <ul class="fusio-list lead">
        <li>Write clean, organized code by using the Symfony dependency injection container.</li>
        <li>Store your entire setup in simple YAML files for easy deployment and version control.</li>
        <li>Quickly generate models, database tables, SDKs, and migrations with a single command.</li>
        <li>Use a clear folder structure that gives your project a solid foundation as it grows.</li>
      </ul>
      <p class="lead">This flexibility helps you build APIs that fit your exact business requirements.</p>
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
