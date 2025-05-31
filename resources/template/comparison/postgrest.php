<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to PostgREST</h1>
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
          <th>PostgREST</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Type</td>
          <td>API management and backend framework</td>
          <td>Instant REST API for PostgreSQL</td>
        </tr>
        <tr>
          <td>Primary Focus</td>
          <td>Full-featured API platform with custom logic</td>
          <td>Auto-generate REST API from PostgreSQL</td>
        </tr>
        <tr>
          <td>Language/Stack</td>
          <td>PHP, SQL</td>
          <td>Polyglot (Runs on Docker; SDKs in many langs)</td>
        </tr>
        <tr>
          <td>Database Support</td>
          <td>MySQL, PostgreSQL, SQLite, etc.</td>
          <td>PostgreSQL only</td>
        </tr>
        <tr>
          <td>API Generation</td>
          <td>Manual + CRUD API builder</td>
          <td>Automatic from DB schema</td>
        </tr>
        <tr>
          <td>Self-hosted</td>
          <td>✅ Yes (Docker, Composer)</td>
          <td>✅ Yes (single binary)</td>
        </tr>
        <tr>
          <td>OpenAPI Support</td>
          <td>✅ Auto-generated</td>
          <td>❌ (manual or via community tools)</td>
        </tr>
        <tr>
          <td>Open Source License</td>
          <td>Apache 2.0</td>
          <td>MIT</td>
        </tr>
        <tr>
          <td>Custom Logic</td>
          <td>PHP, JavaScript, or SQL actions</td>
          <td>PostgreSQL stored procedures only</td>
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
      <p><b>Fusio</b> is an open-source API management system designed to:</p>
      <ul>
        <li>Create and manage REST APIs from relational data</li>
        <li>Integrate with any SQL database (MySQL, PostgreSQL, etc.)</li>
        <li>Handle authentication and permissions with an OAuth2 server</li>
        <li>Provide backend logic using PHP, JavaScript, or SQL</li>
        <li>Auto-generate OpenAPI documentation for developers</li>
      </ul>
      <p>Fusio is ideal for building secure, structured APIs with full control over logic, versioning, and access.</p>
    </div>
    <div class="col-6">
      <p><b>PostgREST</b> is a lightweight web server that automatically exposes your PostgreSQL database as a RESTful API. It allows:</p>
      <ul>
        <li>Fully auto-generated endpoints based on database schema</li>
        <li>Use of PostgreSQL roles and JWTs for access control</li>
        <li>Execution of stored procedures as custom endpoints</li>
        <li>Ultra-low-latency, no-backend API layer</li>
      </ul>
      <p>PostgREST is ideal for PostgreSQL power users who want a minimalistic, fast REST API with zero overhead.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
      <p>Choose <b>Fusio</b> if:</p>
      <ul>
        <li>You need to build and control your API structure and logic</li>
        <li>You're working with MySQL, SQLite, or multiple backends</li>
        <li>You want built-in OAuth2 authentication, versioning, and rate-limiting</li>
        <li>You need OpenAPI docs, extensibility, and integration points</li>
      </ul>
      <p>Ideal for:</p>
      <ul>
        <li>Enterprises and agencies</li>
        <li>Backend/API-first projects</li>
        <li>Teams that want a full API lifecycle management platform</li>
      </ul>
    </div>
    <div class="col-6">
      <p>Choose <b>PostgREST</b> if:</p>
      <ul>
        <li>You're working exclusively with PostgreSQL</li>
        <li>You want a zero-boilerplate REST API with no backend code</li>
        <li>You’re comfortable managing logic through SQL/stored procedures</li>
        <li>You want to expose your schema quickly with minimal setup</li>
      </ul>
      <p>Ideal for:</p>
      <ul>
        <li>PostgreSQL-centric teams</li>
        <li>Internal tools or data dashboards</li>
        <li>Prototyping fast read/write access to a database</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h4>💡 Final Thoughts</h4>
      <p><b>Fusio</b> and <b>PostgREST</b> both shine when working with SQL data — but their goals differ:</p>
      <ul>
        <li><b>Fusio</b> offers a complete platform for customizable, secure, and documented APIs, great for long-term backend development.</li>
        <li><b>PostgREST</b> provides a fast and elegant way to immediately expose a PostgreSQL database, best for database-centric applications.</li>
      </ul>
      <p>Choose <b>Fusio</b> if you want control, security, and extensibility.</p>
      <p>Choose <b>PostgREST</b> if you want minimalism, speed, and simplicity.</p>
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
