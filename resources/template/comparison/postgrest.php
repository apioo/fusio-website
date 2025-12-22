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
        <p class="lead">This page compares <a href="https://www.fusio-project.org/">Fusio</a>, an open-source API management platform focused on building and managing APIs, with <a href="https://docs.postgrest.org/">PostgREST</a>, an open-source tool that instantly exposes a PostgreSQL database as a RESTful API. While both tools work with relational data, they fulfill very different use cases in the API ecosystem.</p>
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
                        <th>PostgREST</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Type</td>
                        <td>API management platform</td>
                        <td>REST API generator for PostgreSQL</td>
                    </tr>
                    <tr>
                        <td>Primary Use Case</td>
                        <td>Build, manage, secure, customize APIs</td>
                        <td>Auto-generate REST API from PostgreSQL schema</td>
                    </tr>
                    <tr>
                        <td>Open Source</td>
                        <td>✅ Yes (Apache 2.0)</td>
                        <td>✅ Yes (MIT)</td>
                    </tr>
                    <tr>
                        <td>Self-Hosted</td>
                        <td>✅ Yes (Docker/Composer)</td>
                        <td>✅ Yes (single binary)</td>
                    </tr>
                    <tr>
                        <td>Database Support</td>
                        <td>Multiple SQL databases</td>
                        <td>PostgreSQL only</td>
                    </tr>
                    <tr>
                        <td>API Generation</td>
                        <td>Custom definitions + CRUD generator</td>
                        <td>Automatic from database schema</td>
                    </tr>
                    <tr>
                        <td>Authentication</td>
                        <td>Built-in OAuth2</td>
                        <td>JWT & PostgreSQL role based</td>
                    </tr>
                    <tr>
                        <td>OpenAPI Documentation</td>
                        <td>✅ Auto-generated</td>
                        <td>⚠️ Auto-generated OpenAPI spec endpoint</td>
                    </tr>
                    <tr>
                        <td>Custom Logic</td>
                        <td>PHP/JS/SQL actions</td>
                        <td>PostgreSQL stored procedures only</td>
                    </tr>
                    <tr>
                        <td>Extensibility</td>
                        <td>High (actions/plugins)</td>
                        <td>Limited to database functions/views</td>
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
            <p class="lead">The main difference between Fusio and PostgREST lies in how they approach API creation and flexibility.</p>
        </div>
        <div class="col-6">
            <p><b>Fusio</b> is a full API management platform designed to help developers define, implement, secure, and document APIs with control and extensibility:</p>
            <ul>
                <li>Create structured REST APIs with custom logic across multiple SQL databases</li>
                <li>Manage access and security with a built-in OAuth2 server</li>
                <li>Automatically generate OpenAPI documentation for APIs</li>
                <li>Implement backend workflows using PHP, JavaScript, or SQL actions</li>
                <li>Customize behavior far beyond simple CRUD operations</li>
            </ul>
            <p>Fusio is built for API lifecycle management, custom business logic, and developer workflows.</p>
        </div>
        <div class="col-6">
            <p><b>PostgREST</b> is a lightweight, database-first REST API generator that turns your PostgreSQL database into a RESTful API with minimal setup:</p>
            <ul>
                <li>Automatically expose tables, views, and stored procedures as REST endpoints</li>
                <li>Respect PostgreSQL role-based access control and JWT authentication</li>
                <li>Serve APIs with minimal overhead between database and HTTP layer</li>
                <li>Delegate logic to PostgreSQL functions and database constraints</li>
            </ul>
            <p>PostgREST focuses on instant API generation from PostgreSQL schemas with very little custom backend code.</p>
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
                    <li>You need full control over how your APIs are defined and behave</li>
                    <li>You want built-in API management features like OAuth2, rate limits, versioning, and documentation</li>
                    <li>Your project requires custom logic and business workflows beyond basic CRUD</li>
                    <li>You need to support multiple database backends (MySQL, PostgreSQL, SQLite, etc.)</li>
                    <li>You want an API platform with developer portals and lifecycle tools</li>
                </ul>
                <p>Fusio is ideal for complex API systems, enterprise needs, and long-term maintainable backend APIs.</p>
            </div>
            <div class="col-6">
                <p>Choose <b>PostgREST</b> if:</p>
                <ul>
                    <li>You are working exclusively with PostgreSQL</li>
                    <li>You want a zero-boilerplate REST API directly from your database schema</li>
                    <li>You are comfortable defining logic through SQL stored procedures and database constraints</li>
                    <li>You want to rapidly prototype or build database-centric applications</li>
                    <li>You don't need extensive API management tooling or custom middleware</li>
                </ul>
                <p>PostgREST excels for data-driven applications and internal tools where database schema is the primary source of truth.</p>
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
