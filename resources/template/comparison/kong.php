<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to Kong</h1>
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
          <th>Kong</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Type</td>
          <td>Full API management platform</td>
          <td>High-performance API gateway</td>
        </tr>
        <tr>
          <td>Language</td>
          <td>PHP</td>
          <td>Lua / NGINX</td>
        </tr>
        <tr>
          <td>Open Source</td>
          <td>✅ Yes (Apache 2.0)</td>
          <td>✅ Yes (Apache 2.0 + Enterprise)</td>
        </tr>
        <tr>
          <td>Admin Interface</td>
          <td>✅ Web-based backend</td>
          <td>❌ Only with Enterprise Dashboard</td>
        </tr>
        <tr>
          <td>OAuth2 Support</td>
          <td>✅ Built-in</td>
          <td>⚠️ Via plugin (OpenID Connect plugin)</td>
        </tr>
        <tr>
          <td>API Documentation</td>
          <td>✅ Auto-generated (OpenAPI)</td>
          <td>⚠️ Manual or plugin</td>
        </tr>
        <tr>
          <td>API Actions</td>
          <td>✅ CRUD, RPC, Webhook, Code-based</td>
          <td>❌ Limited to plugin flow</td>
        </tr>
        <tr>
          <td>Target Audience</td>
          <td>Developers needing full API backend</td>
          <td>DevOps teams needing performant proxy</td>
        </tr>
        <tr>
          <td>Extensibility</td>
          <td>✅ PHP or JS actions</td>
          <td>✅ Lua plugins</td>
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
      <h5>Fusio: A Complete API Management Platform</h5>
      <p>Fusio provides an all-in-one API management solution that includes:</p>
      <ul>
        <li>Admin UI to manage endpoints, scopes, users, and apps</li>
        <li>Built-in OAuth2 server for authentication and token management</li>
        <li>Auto-generated OpenAPI documentation</li>
        <li>Support for direct database APIs, RPC, or custom logic</li>
        <li>Developer-focused workflow — ideal for building backend APIs from scratch</li>
      </ul>
      <p><b>Best for:</b> Developers and teams who want full control over their API lifecycle, from definition to deployment.</p>
    </div>
    <div class="col-6">
      <h5>Kong: A High-Performance API Gateway</h5>
      <p>Kong is built for speed and scale. As a lightweight gateway, it excels at:</p>
      <ul>
        <li>Proxying high-throughput API traffic</li>
        <li>Enabling plugins for security, rate limiting, logging, and more</li>
        <li>Operating in cloud-native environments (Kubernetes, AWS, etc.)</li>
        <li>Scaling to enterprise traffic needs</li>
      </ul>
      <p>However, it requires additional setup for features like an admin dashboard, OAuth2, and documentation.</p>
      <p><b>Best for:</b> Teams needing a powerful, high-performance proxy layer with plugin flexibility.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
      <h5>✅ When to Choose Fusio</h5>
      <p>Choose <b>Fusio</b> if you need:</p>
      <ul>
        <li>A complete backend API solution with admin UI and database integration</li>
        <li>Open-source control and extensibility with PHP or JavaScript</li>
        <li>Built-in OAuth2 and developer-friendly workflows</li>
        <li>Fast setup for CRUD, REST, and webhook APIs</li>
      </ul>
      <p>Ideal for:</p>
      <ul>
        <li>Startups and product teams</li>
        <li>Internal tools and data APIs</li>
        <li>Full-stack PHP developers</li>
      </ul>
    </div>
    <div class="col-6">
      <h5>✅ When to Choose Kong</h5>
      <p>Choose <b>Kong</b> if you need:</p>
      <ul>
        <li>A fast, production-grade API gateway</li>
        <li>A scalable service mesh or proxy solution</li>
        <li>Plugin-driven functionality (security, auth, logging)</li>
        <li>A cloud-native, DevOps-focused gateway</li>
      </ul>
      <p>Ideal for:</p>
      <ul>
        <li>Large-scale distributed systems</li>
        <li>Teams using Kubernetes or service meshes</li>
        <li>Enterprises prioritizing speed and reliability</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h4>💡 Final Thoughts</h4>
      <p>Both Fusio and Kong are powerful — but designed for different needs.</p>
      <ul>
        <li>Fusio is ideal if you’re building APIs from the ground up and want full lifecycle management.</li>
        <li>Kong is best when you already have APIs and need a gateway to secure, monitor, and route traffic at scale.</li>
      </ul>
      <p>Want to try Fusio? Get started with a <a href="https://www.fusio-project.org/demo">demo</a> or read the <a href="https://docs.fusio-project.org/">documentation</a>.</p>
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
