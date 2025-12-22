<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to Laravel</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="row">
        <p class="lead">This page compares <a href="https://www.fusio-project.org/">Fusio</a>, an open-source API management platform focused on building and managing structured APIs, with <a href="https://laravel.com/">Laravel</a>, a popular open-source PHP web application framework. Although both are used in backend development, they serve different roles and developer needs in modern applications.</p>
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
                        <th>Laravel</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Type</td>
                        <td>API management platform</td>
                        <td>PHP web application framework</td>
                    </tr>
                    <tr>
                        <td>Primary Use Case</td>
                        <td>Build, secure, document, and manage REST APIs</td>
                        <td>Build full backend and web applications</td>
                    </tr>
                    <tr>
                        <td>Open Source</td>
                        <td>✅ Yes (Apache 2.0)</td>
                        <td>✅ Yes (MIT)</td>
                    </tr>
                    <tr>
                        <td>API Generation</td>
                        <td>Manual API definitions + custom logic</td>
                        <td>Not automatic; built with routes/controllers</td>
                    </tr>
                    <tr>
                        <td>Database Support</td>
                        <td>Multiple SQL backends</td>
                        <td>Any via ORM (Eloquent)</td>
                    </tr>
                    <tr>
                        <td>Authentication</td>
                        <td>Built-in OAuth2 support</td>
                        <td>Built-in auth scaffolding (via packages like Sanctum/Jetstream)</td>
                    </tr>
                    <tr>
                        <td>Documentation</td>
                        <td>Auto-generated OpenAPI</td>
                        <td>Manual/documented via code or tools</td>
                    </tr>
                    <tr>
                        <td>Custom Logic</td>
                        <td>PHP/JS/SQL actions</td>
                        <td>Full custom backend code (MVC, services)</td>
                    </tr>
                    <tr>
                        <td>Extensibility</td>
                        <td>Plugins/actions</td>
                        <td>Libraries/packages (Composer ecosystem)</td>
                    </tr>
                    <tr>
                        <td>Use Case Focus</td>
                        <td>API lifecycle and governance</td>
                        <td>Full application development and APIs</td>
                    </tr>
                    <tr>
                        <td>Deployment</td>
                        <td>Self-hosted</td>
                        <td>Self-hosted / Cloud</td>
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
            <p class="lead">The main difference between Fusio and Laravel is their intended role in backend development and how they solve backend challenges.</p>
        </div>
        <div class="col-6">
            <p><b>Fusio</b> is an API management platform designed specifically for building and managing REST APIs with governance and lifecycle tooling:</p>
            <ul>
                <li>Define and expose structured APIs with custom logic</li>
                <li>Centralize API security using a built-in OAuth2 server</li>
                <li>Auto-generate OpenAPI documentation</li>
                <li>Implement backend workflows using PHP, JavaScript, or SQL actions</li>
                <li>Offer a dashboard and management interface for API resources</li>
            </ul>
            <p>Fusio focuses on API lifecycle management, security, and documentation workflows.</p>
        </div>
        <div class="col-6">
            <p><b>Laravel</b> is a general-purpose PHP web application framework built to develop full backend systems and web applications:</p>
            <ul>
                <li>MVC architecture with routing, controllers, models, and views</li>
                <li>Eloquent ORM for expressive database interactions</li>
                <li>Built-in tools for routing, templating (Blade), migrations, and testing</li>
                <li>Authentication and authorization scaffolding via first-party packages</li>
                <li>Rich ecosystem of extensions and tools for tasks like queues, caching, APIs, and real-time features</li>
            </ul>
            <p>Laravel provides a flexible and full backend development environment, including API capabilities but without built-in API management tooling.</p>
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
                    <li>You need a dedicated platform to build, secure, and manage REST APIs</li>
                    <li>Auto-generated API documentation and centralized API handling are important</li>
                    <li>You want built-in API governance features like OAuth2, scopes, and developer workflows</li>
                    <li>Your project emphasizes API design and lifecycle over general application structure</li>
                </ul>
                <p>Fusio is ideal for API-centric teams building products, integrations, or services that expose APIs at scale.</p>
            </div>
            <div class="col-6">
                <p>Choose <b>Laravel</b> if:</p>
                <ul>
                    <li>You are building a full backend application, not just APIs</li>
                    <li>You need an application framework for webpages, services, and business processes</li>
                    <li>You want deep framework support for routing, views, authentication, queues, and more</li>
                    <li>You prefer access to a large ecosystem of packages and tooling</li>
                </ul>
                <p>Laravel is ideal for developers building web applications and backend services that include APIs as part of broader functionality.</p>
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
