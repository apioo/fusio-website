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
        <p class="lead">This page compares <a href="https://www.fusio-project.org/">Fusio</a>, an open-source API management platform focused on building and managing APIs, with <a href="https://supabase.com/">Supabase</a>, an open-source Backend-as-a-Service (BaaS) platform that provides a managed PostgreSQL backend, real-time features, authentication, storage, and auto-generated APIs.</p>
    </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="fusio-sub-headline h4 fw-normal">🔍 Feature Comparison</h2>
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
                        <td>API management platform</td>
                        <td>Backend-as-a-Service (BaaS)</td>
                    </tr>
                    <tr>
                        <td>Primary Focus</td>
                        <td>Build, expose, and secure REST APIs</td>
                        <td>Full backend: DB, auth, real-time, storage, functions</td>
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
                        <td>Connects to SQL DBs</td>
                        <td>Built-in PostgreSQL</td>
                    </tr>
                    <tr>
                        <td>API Generation</td>
                        <td>Manual or CRUD actions</td>
                        <td>Auto-generated REST; GraphQL is supported via the pg_graphql extension</td>
                    </tr>
                    <tr>
                        <td>Authentication</td>
                        <td>Built-in OAuth2</td>
                        <td>Built-in Supabase Auth (JWT, OAuth)</td>
                    </tr>
                    <tr>
                        <td>Real-time</td>
                        <td>⚠️ Possible via custom logic</td>
                        <td>✅ Built-in real-time via Postgres events</td>
                    </tr>
                    <tr>
                        <td>Custom Logic</td>
                        <td>PHP/JS/SQL actions</td>
                        <td>Edge Functions (TypeScript)</td>
                    </tr>
                    <tr>
                        <td>Storage</td>
                        <td>⚠️ External via filesystem or connectors</td>
                        <td>✅ Object storage (S3-compatible)</td>
                    </tr>
                    <tr>
                        <td>Preferred Use Case</td>
                        <td>API first & backend logic</td>
                        <td>Full backend for web/mobile apps</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="row">
        <div class="col-12">
            <h2 class="fusio-sub-headline h4 fw-normal">🎯 Key Differences</h2>
            <p class="lead">The main difference between Fusio and Supabase lies in their architectural focus and backend responsibilities.</p>
        </div>
        <div class="col-6">
            <p><b>Fusio</b> is an API management platform designed to give developers direct control over creating, managing, and securing APIs:</p>
            <ul>
                <li>Create structured REST APIs with custom logic</li>
                <li>Connect to external SQL databases (MySQL, PostgreSQL, etc.)</li>
                <li>Secure endpoints with a built-in OAuth2 server and scopes</li>
                <li>Automatically generate OpenAPI documentation</li>
                <li>Implement backend workflows using PHP, JavaScript, or SQL</li>
            </ul>
            <p>Fusio is focused on API design, backend logic, and lifecycle workflows, making it suitable for structured API systems.</p>
        </div>
        <div class="col-6">
            <p><b>Supabase</b> is a full-stack backend platform that provides a ready-to-use PostgreSQL database with auto-generated APIs and integrated backend services:</p>
            <ul>
                <li>Managed PostgreSQL database with REST and GraphQL APIs</li>
                <li>Built-in user authentication and access control</li>
                <li>Real-time database subscriptions and events</li>
                <li>Object storage for files</li>
                <li>Edge Functions for serverless logic</li>
            </ul>
            <p>Supabase is focused on providing a complete backend stack that handles database, auth, real-time updates, storage, and serverless functions out-of-the-box.</p>
        </div>
    </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="fusio-sub-headline h4 fw-normal">📌 When to Choose Which</h2>
            </div>
            <div class="col-6">
                <p>Choose <b>Fusio</b> if:</p>
                <ul>
                    <li>You need full control over API design, security, and logic</li>
                    <li>You want to self-host or integrate existing databases</li>
                    <li>You prefer structured API management with OAuth2 and OpenAPI workflows</li>
                    <li>Your project is API-first or backend developer-centric</li>
                    <li>You want a provider-independent stack (no hosted BaaS required)</li>
                </ul>
                <p>Fusio is ideal for building custom, secure, production APIs with fine-grained access controls.</p>
            </div>
            <div class="col-6">
                <p>Choose <b>Supabase</b> if:</p>
                <ul>
                    <li>You want a complete backend platform for web or mobile apps</li>
                    <li>You prefer instant API generation from your database schema</li>
                    <li>You need built-in authentication, real-time features, and storage</li>
                    <li>You’re comfortable with PostgreSQL and JavaScript/TypeScript workflows</li>
                    <li>You want the option of managed hosting with minimal setup</li>
                </ul>
                <p>Supabase is excellent for rapidly building full-stack applications with less backend overhead.</p>
            </div>
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
