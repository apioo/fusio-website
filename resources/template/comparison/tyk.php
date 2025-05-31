<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to Tyk</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h4>🔍 Overview</h4>
      <table class="table">
        <thead>
        <tr>
          <th>Feature</th>
          <th>Fusio</th>
          <th>Tyk</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Type</td>
          <td>Full API management system</td>
          <td>API gateway / traffic manager</td>
        </tr>
        <tr>
          <td>Language</td>
          <td>PHP</td>
          <td>Go</td>
        </tr>
        <tr>
          <td>Open Source</td>
          <td>✅ Yes (Apache 2.0)</td>
          <td>✅ Yes (with commercial offerings)</td>
        </tr>
        <tr>
          <td>Admin Interface</td>
          <td>✅ Built-in web UI</td>
          <td>✅ Admin dashboard available</td>
        </tr>
        <tr>
          <td>OAuth2 Support</td>
          <td>✅ Built-in OAuth2 server</td>
          <td>✅ OAuth2 with external identity provider</td>
        </tr>
        <tr>
          <td>API Documentation</td>
          <td>✅ Auto-generated OpenAPI docs</td>
          <td>⚠️ Manual setup or with plugins</td>
        </tr>
        <tr>
          <td>Extensibility</td>
          <td>✅ PHP & JavaScript-based actions</td>
          <td>✅ Middleware in Go, JavaScript, Python</td>
        </tr>
        <tr>
          <td>Analytics & Logging</td>
          <td>✅ Integrated logging and monitoring</td>
          <td>✅ Detailed analytics, quota, and rate limits</td>
        </tr>
        <tr>
          <td>Deployment Options</td>
          <td>Self-hosted via Docker or Composer</td>
          <td>Self-hosted, Hybrid Cloud, Tyk Cloud</td>
        </tr>
        </tbody>
      </table>
  </div>
  </div>
  <div class="row">
    <div class="col-12">
      <h4>🎯 Key Differences</h4>
    </div>
    <div class="col-6">
      <p><b>Fusio</b> is an open-source API management system that allows developers to design, implement, and manage RESTful APIs with ease. It offers:</p>
      <ul>
        <li>A user-friendly admin UI to manage endpoints, apps, and scopes</li>
        <li>Built-in OAuth2 server for securing APIs</li>
        <li>Automatic OpenAPI documentation for all routes</li>
        <li>Powerful backend actions: CRUD from databases, custom logic, remote calls</li>
        <li>Plugin system to extend functionality with PHP or JavaScript</li>
      </ul>
    </div>
    <div class="col-6">
      <p><b>Tyk</b> is an open-source API gateway built for high performance and flexibility. It acts primarily as a traffic proxy and policy engine, focused on:</p>
      <ul>
        <li>Routing, rate-limiting, and securing API traffic</li>
        <li>Authentication through JWT, OAuth2, HMAC, and mor</li>
        <li>Middleware customization via Go, JS, or Python</li>
        <li>Detailed analytics and usage monitoring</li>
        <li>Enterprise features like developer portals and multi-tenant dashboards</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
      <p>Use Fusio if you want:</p>
      <ul>
        <li>A complete solution for creating and managing APIs</li>
        <li>Built-in authentication and documentation out of the box</li>
        <li>Tight integration with SQL databases and backend workflows</li>
        <li>A developer-friendly, open-source alternative to commercial API tools</li>
      </ul>
    </div>
    <div class="col-6">
      <p>Use Tyk if you need:</p>
      <ul>
        <li>A scalable and performant API gateway for existing services</li>
        <li>Fine-grained control over request policies</li>
        <li>Integration with enterprise identity providers</li>
        <li>Hosted or hybrid deployments at scale</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h4>💡 Final Thoughts</h4>
      <p><b>Fusio</b> is ideal for developers who want a self-hosted, all-in-one API platform — especially if you're building APIs from scratch or managing data-driven endpoints. It handles the entire API lifecycle, from design to deployment.</p>
      <p><b>Tyk</b>, on the other hand, is a powerful proxy gateway, best suited for managing existing services, applying rate limits, securing traffic, and scaling distributed systems.</p>
      <p>Both are open source — the right choice depends on whether you're creating APIs (Fusio) or managing traffic for APIs (Tyk).</p>
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
