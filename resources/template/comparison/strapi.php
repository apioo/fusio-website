<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to Strapi</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="row">
        <p class="lead">This page compares <a href="https://www.fusio-project.org/">Fusio</a>, an open-source API management platform for building and managing structured APIs, with <a href="https://strapi.io/">Strapi</a>, a popular open-source headless CMS that automatically generates APIs from content models. While both provide APIs, they are designed for different developer workflows and use cases.</p>
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
                        <th>Strapi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Type</td>
                        <td>API management platform</td>
                        <td>Headless CMS / API platform</td>
                    </tr>
                    <tr>
                        <td>Primary Use Case</td>
                        <td>Build, secure, document, and manage REST APIs</td>
                        <td>Manage content and auto-generate APIs</td>
                    </tr>
                    <tr>
                        <td>Open Source</td>
                        <td>✅ Yes (Apache 2.0)</td>
                        <td>✅ Yes (MIT)</td>
                    </tr>
                    <tr>
                        <td>API Generation</td>
                        <td>Manual API definitions + custom logic</td>
                        <td>Auto-generated REST & GraphQL APIs</td>
                    </tr>
                    <tr>
                        <td>Content Management UI</td>
                        <td>⚠️ Admin UI for APIs</td>
                        <td>✅ Full CMS interface</td>
                    </tr>
                    <tr>
                        <td>Authentication & Security</td>
                        <td>Built-in OAuth2 server</td>
                        <td>Role-based access control (RBAC)</td>
                    </tr>
                    <tr>
                        <td>Custom Logic</td>
                        <td>PHP/JS/SQL actions</td>
                        <td>Custom controllers, policies, plugins</td>
                    </tr>
                    <tr>
                        <td>Database Support</td>
                        <td>Multiple SQL backends</td>
                        <td>Multiple DBs (PostgreSQL, MySQL, SQLite, etc.)</td>
                    </tr>
                    <tr>
                        <td>Documentation</td>
                        <td>Auto-generated OpenAPI</td>
                        <td>Custom or plugin-based (e.g., GraphQL)</td>
                    </tr>
                    <tr>
                        <td>Extensibility</td>
                        <td>Actions/plugins</td>
                        <td>Plugins & extensible admin panel</td>
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
            <p class="lead">The main difference between Fusio and Strapi lies in what they’re optimized for and how they produce APIs.</p>
        </div>
        <div class="col-6">
            <p><b>Fusio</b> is an API management platform focused on giving developers control over how APIs are defined, secured, and documented:</p>
            <ul>
                <li>Create structured REST APIs with custom backend logic</li>
                <li>Secure access using a built-in OAuth2 server</li>
                <li>Automatically generate OpenAPI documentation</li>
                <li>Support multiple SQL backends and custom workflows</li>
                <li>Provide API governance and lifecycle tooling</li>
            </ul>
            <p>Fusio emphasizes API lifecycle management, extensibility, and backend workflows above all.</p>
        </div>
        <div class="col-6">
            <p><b>Strapi</b> is a headless CMS that automatically generates REST and GraphQL APIs from content models:</p>
            <ul>
                <li>Provide a visual content management interface</li>
                <li>Auto-generate APIs from defined content types</li>
                <li>Support both REST and GraphQL endpoints</li>
                <li>Include built-in role-based access control (RBAC) for content permissions</li>
                <li>Extend functionality with custom controllers, policies, and plugins</li>
            </ul>
            <p>Strapi focuses on content modeling, API scaffolding, and CMS workflows for apps where content delivery is central.</p>
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
                    <li>You need full control over API design, security, and custom logic</li>
                    <li>You want API lifecycle governance with a dedicated management platform</li>
                    <li>You are building structured API products, developer portals, or service APIs</li>
                    <li>OpenAPI documentation and OAuth2 workflows are important</li>
                </ul>
                <p>Fusio is ideal for teams focused on API products and integrations where APIs are more than just content delivery.</p>
            </div>
            <div class="col-6">
                <p>Choose <b>Strapi</b> if:</p>
                <ul>
                    <li>You want to manage content and get APIs instantly</li>
                    <li>You need a CMS UI for non-technical users</li>
                    <li>Auto-generated REST and GraphQL APIs speed up development</li>
                    <li>You value a visual interface for modeling content and permissions</li>
                </ul>
                <p>Strapi is great for content-driven applications, websites, and digital experiences where backend code should be minimal.</p>
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
