<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to Supabase</h1>
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
          <th>Supabase</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Type</td>
          <td>Open-source API management platform</td>
          <td>Open-source Backend-as-a-Service (BaaS)</td>
        </tr>
        <tr>
          <td>Primary Focus</td>
          <td>Expose and manage REST APIs</td>
          <td>Full-stack backend: DB, auth, real-time, API</td>
        </tr>
        <tr>
          <td>Language/Stack</td>
          <td>PHP, SQL</td>
          <td>PostgreSQL, TypeScript, Go</td>
        </tr>
        <tr>
          <td>Open Source</td>
          <td>✅ Yes (Apache 2.0)</td>
          <td>✅ Yes (MIT)</td>
        </tr>
        <tr>
          <td>Hosting</td>
          <td>Self-hosted (Docker, Composer)</td>
          <td>Supabase Cloud or self-hosted (Docker)</td>
        </tr>
        <tr>
          <td>Database</td>
          <td>SQL (MySQL, PostgreSQL, etc.)</td>
          <td>PostgreSQL</td>
        </tr>
        <tr>
          <td>API Generation</td>
          <td>Manual config or CRUD actions</td>
          <td>Auto-generated REST/GraphQL API from DB</td>
        </tr>
        <tr>
          <td>Custom Logic</td>
          <td>Actions in PHP/JavaScript/SQL</td>
          <td>Edge Functions (Deno/TypeScript)</td>
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
      <p><b>Fusio</b> is an open-source API management system designed to let you:</p>
      <ul>
        <li>Create and manage REST APIs</li>
        <li>Connect to existing SQL databases (MySQL, PostgreSQL, SQLite, etc.)</li>
        <li>Handle authentication and scopes via OAuth2</li>
        <li>Auto-generate OpenAPI documentation</li>
        <li>Write custom backend logic in PHP, JavaScript, or SQL</li>
      </ul>
      <p>Fusio is ideal for developers who want full control over the backend while offering secure, structured APIs.</p>
    </div>
    <div class="col-6">
      <p><b>Supabase</b> is an open-source Firebase alternative that offers a real-time backend with:</p>
      <ul>
        <li>PostgreSQL database</li>
        <li>Auto-generated REST and GraphQL APIs</li>
        <li>Authentication and user management</li>
        <li>Realtime subscriptions</li>
        <li>Serverless Edge Functions</li>
        <li>Storage and file uploads</li>
      </ul>
      <p>Supabase is ideal for rapid full-stack app development, especially when you're working with PostgreSQL and JavaScript/TypeScript.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
      <p>Pick <b>Fusio</b> if:</p>
      <ul>
        <li>You need full control over the API layer, logic, and access control</li>
        <li>You want to integrate and expose existing SQL databases</li>
        <li>You prefer manual API design over auto-generated endpoints</li>
        <li>You require a self-hosted, compliant solution with an OAuth2 server</li>
        <li>You're working in a PHP or SQL-heavy environment</li>
      </ul>
      <p>Ideal for:</p>
      <ul>
        <li>API-first platforms</li>
        <li>Backend-focused teams</li>
        <li>Enterprise integration scenarios</li>
        <li>Developers migrating from legacy systems</li>
      </ul>
    </div>
    <div class="col-6">
      <p>Pick <b>Supabase</b> if:</p>
      <ul>
        <li>You're building a full-stack app and need instant REST/GraphQL APIs</li>
        <li>You're comfortable with PostgreSQL and want rapid prototyping</li>
        <li>You want tight integration with frontend tools (React, Next.js, etc.)</li>
        <li>You need realtime updates, Edge Functions, and file storage</li>
        <li>You're comfortable working in JavaScript/TypeScript</li>
      </ul>
      <p>Ideal for:</p>
      <ul>
        <li>Startups and MVPs</li>
        <li>Jamstack and frontend developers</li>
        <li>Firebase alternatives with open-source freedom</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h4>💡 Final Thoughts</h4>
      <p><b>Fusio</b> and <b>Supabase</b> share the open-source spirit — but they solve different problems:</p>
      <ul>
        <li><b>Fusio</b> is for developers who want to build, control, and manage APIs at a granular level with a strong backend-first approach.</li>
        <li><b>Supabase</b> is for teams who want fast, frontend-centric app development with minimal backend setup and PostgreSQL automation.</li>
      </ul>
      <p>Choose <b>Fusio</b> for custom, secure, production-grade APIs.</p>
      <p>Choose <b>Supabase</b> for rapid app development with built-in auth and real-time features.</p>
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
