<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to Appwrite</h1>
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
          <th>Appwrite</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Type</td>
          <td>API management and creation platform</td>
          <td>Backend-as-a-Service (BaaS)</td>
        </tr>
        <tr>
          <td>Primary Use Case</td>
          <td>Build and expose REST APIs</td>
          <td>Build secure full-stack apps</td>
        </tr>
        <tr>
          <td>Language/Stack</td>
          <td>PHP, SQL</td>
          <td>Polyglot (Runs on Docker; SDKs in many langs)</td>
        </tr>
        <tr>
          <td>Database Support</td>
          <td>SQL (MySQL, PostgreSQL, SQLite, etc.)</td>
          <td>Built-in database (NoSQL-like document model)</td>
        </tr>
        <tr>
          <td>API Layer</td>
          <td>Manually defined APIs with full control</td>
          <td>Auto-generated APIs for built-in services</td>
        </tr>
        <tr>
          <td>Self-hosted</td>
          <td>✅ Yes (Docker, Composer)</td>
          <td>✅ Yes (Docker)</td>
        </tr>
        <tr>
          <td>Open Source License</td>
          <td>Apache 2.0</td>
          <td>BSD 3-Clause</td>
        </tr>
        <tr>
          <td>Custom Logic</td>
          <td>PHP, JavaScript, SQL actions</td>
          <td>Cloud Functions (language-agnostic)</td>
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
      <p><b>Fusio</b> is an open-source API management platform designed to:</p>
      <ul>
        <li>Create and manage REST APIs with fine-grained control</li>
        <li>Connect directly to SQL databases</li>
        <li>Provide built-in OAuth2 authentication and role-based access</li>
        <li>Enable backend logic using PHP, JavaScript, or SQL</li>
        <li>Automatically generate OpenAPI documentation</li>
      </ul>
      <p>Fusio is ideal for developers who want complete backend ownership, API-first design, and integration with existing data systems.</p>
    </div>
    <div class="col-6">
      <p><b>Appwrite</b> is an open-source backend platform designed for developers building mobile and web applications. It includes:</p>
      <ul>
        <li>Built-in authentication, databases, file storage, and functions</li>
        <li>Client SDKs for frontend frameworks like React, Flutter, Vue, and more</li>
        <li>Support for multiple programming languages for backend logic</li>
        <li>Real-time features and OAuth2 integration</li>
      </ul>
      <p>Appwrite is best suited for teams looking for an all-in-one backend toolkit to quickly build secure full-stack applications.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
      <p>Choose <b>Fusio</b> if:</p>
      <ul>
        <li>You want to build structured APIs from scratch or expose existing data</li>
        <li>You need fine-grained authentication and scope-based permissions</li>
        <li>You prefer working with SQL databases</li>
        <li>You require a fully self-managed backend with OpenAPI integration</li>
        <li>You want to integrate with existing enterprise or legacy systems</li>
      </ul>
      <p>Ideal for:</p>
      <ul>
        <li>API platforms</li>
        <li>Developers managing business logic and database-driven APIs</li>
        <li>Backend-first architectures</li>
      </ul>
    </div>
    <div class="col-6">
      <p>Choose <b>Appwrite</b> if:</p>
      <ul>
        <li>You're building a frontend-heavy or mobile application</li>
        <li>You want a fast, all-in-one backend with minimal setup</li>
        <li>You prefer auto-generated APIs and rich client SDKs</li>
        <li>You want cloud functions, file storage, and user auth out-of-the-box</li>
        <li>You're working in JavaScript, Flutter, or mobile-first stacks</li>
      </ul>
      <p>Ideal for:</p>
      <ul>
        <li>Full-stack JavaScript teams</li>
        <li>Startups building MVPs</li>
        <li>Rapid app development with minimal backend code</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h4>💡 Final Thoughts</h4>
      <p><b>Fusio</b> and <b>Appwrite</b> both deliver powerful open-source solutions, but they serve distinct needs:</p>
      <ul>
        <li><b>Fusio</b> is best for developers who want to build and control APIs, integrate with relational databases, and manage API authentication and security themselves.</li>
        <li><b>Appwrite</b> is perfect for teams who want a plug-and-play backend to accelerate full-stack or mobile app development.</li>
      </ul>
      <p>The right choice depends on whether you’re building an API-centric platform (Fusio) or a user-centric app (Appwrite).</p>
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
