<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to Firebase</h1>
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
          <th>Firebase</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Type</td>
          <td>Open-source API management platform</td>
          <td>Backend-as-a-Service (BaaS)</td>
        </tr>
        <tr>
          <td>Primary Use Case</td>
          <td>Build, manage, and expose REST APIs</td>
          <td>Rapid mobile/web app backend development</td>
        </tr>
        <tr>
          <td>Language</td>
          <td>PHP</td>
          <td>Cloud-native (JavaScript/TypeScript)</td>
        </tr>
        <tr>
          <td>Open Source</td>
          <td>✅ Yes (Apache 2.0)</td>
          <td>❌ Proprietary</td>
        </tr>
        <tr>
          <td>Hosting</td>
          <td>Self-hosted (Docker, Composer)</td>
          <td>Google Cloud (managed)</td>
        </tr>
        <tr>
          <td>Database</td>
          <td>SQL (MySQL, PostgreSQL, etc.)</td>
          <td>NoSQL (Firestore, Realtime DB)</td>
        </tr>
        <tr>
          <td>API Documentation</td>
          <td>✅ Auto-generated OpenAPI docs</td>
          <td>❌ Manual creation</td>
        </tr>
        <tr>
          <td>Custom Logic</td>
          <td>PHP/JS/SQL-based actions</td>
          <td>Cloud Functions (JavaScript/TypeScript)</td>
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
        <li>Create structured REST APIs with full backend logic</li>
        <li>Expose SQL databases through auto-generated endpoints</li>
        <li>Provide OAuth2-based access control and role-based scopes</li>
        <li>Generate OpenAPI documentation for developers</li>
        <li>Be fully self-hosted and customizable</li>
      </ul>
      <p>Fusio is ideal when you want fine-grained control over your backend, database integration, and long-term self-ownership of your stack.</p>
    </div>
    <div class="col-6">
      <p><b>Firebase</b>, by Google, is a fully managed Backend-as-a-Service (BaaS) for web and mobile apps. It provides:</p>
      <ul>
        <li>Real-time and Firestore NoSQL databases</li>
        <li>User authentication, file storage, and cloud functions</li>
        <li>Integration with Google Cloud services</li>
        <li>Client SDKs for Android, iOS, and JavaScript</li>
      </ul>
      <p>Firebase is best suited for rapid app development, especially for teams building MVPs or real-time apps on Google Cloud infrastructure.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
      <p>Choose <b>Fusio</b> if:</p>
      <ul>
        <li>You want to build your own API infrastructure</li>
        <li>You prefer working with SQL databases and relational models</li>
        <li>You need full control over authentication, rate limiting, scopes, and API security</li>
        <li>You’re deploying in environments that require self-hosting or data sovereignty</li>
      </ul>
      <p>Great for:</p>
      <ul>
        <li>Enterprises and agencies</li>
        <li>PHP/SQL developers</li>
        <li>Teams with security or compliance needs</li>
      </ul>
    </div>
    <div class="col-6">
      <p>Choose <b>Firebase</b> if:</p>
      <ul>
        <li>You’re building a real-time web or mobile app</li>
        <li>You want fast development with minimal backend setup</li>
        <li>You're working in JavaScript/TypeScript and prefer a BaaS approach</li>
        <li>You're fine with vendor lock-in and Google Cloud infrastructure</li>
      </ul>
      <p>Great for:</p>
      <ul>
        <li>MVPs and prototypes</li>
        <li>Mobile app developers</li>
        <li>Real-time chat or game apps</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h4>💡 Final Thoughts</h4>
      <p><b>Fusio</b> and <b>Firebase</b> are both powerful — but built for different development styles:</p>
      <ul>
        <li><b>Fusio</b> gives you full control over your backend, authentication, and data. It’s ideal for developers who want structured APIs and control over hosting and scaling.</li>
        <li><b>Firebase</b> is great for building front-end-centric apps quickly, especially with real-time features and Google Cloud services.</li>
      </ul>
      <p>If you value custom logic, SQL integration, and long-term flexibility, Fusio is your best bet.</p>
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
