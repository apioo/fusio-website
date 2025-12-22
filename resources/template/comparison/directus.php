<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to Directus</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="row">
        <p class="lead">This page compares <a href="https://www.fusio-project.org/">Fusio</a>, an open-source API management platform designed for building and managing structured APIs, with <a href="https://directus.io/">Directus</a>, an open-source headless CMS and data platform that instantly exposes SQL database schemas as RESTful and GraphQL APIs while providing a flexible content management UI.</p>
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
                        <th>Directus</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Type</td>
                        <td>API management platform</td>
                        <td>Headless CMS & data platform</td>
                    </tr>
                    <tr>
                        <td>Primary Use Case</td>
                        <td>Build, secure, document, and manage REST APIs</td>
                        <td>Manage content/data with auto APIs</td>
                    </tr>
                    <tr>
                        <td>Open Source</td>
                        <td>✅ Yes (Apache 2.0)</td>
                        <td>✅ Yes (MIT)</td>
                    </tr>
                    <tr>
                        <td>API Generation</td>
                        <td>Manual definition + structured design</td>
                        <td>Auto-generated REST & GraphQL from SQL</td>
                    </tr>
                    <tr>
                        <td>Content Management UI</td>
                        <td>⚠️ Admin UI for APIs</td>
                        <td>✅ Full no-code CMS/data studio</td>
                    </tr>
                    <tr>
                        <td>Authentication & Security</td>
                        <td>Built-in OAuth2 server</td>
                        <td>RBAC, custom roles/permissions, auth providers</td>
                    </tr>
                    <tr>
                        <td>Custom Logic</td>
                        <td>PHP/JS/SQL actions</td>
                        <td>Extensions, hooks, flows</td>
                    </tr>
                    <tr>
                        <td>Database Support</td>
                        <td>Multiple SQL backends</td>
                        <td>Any SQL database via introspection</td>
                    </tr>
                    <tr>
                        <td>Documentation</td>
                        <td>Auto-generated OpenAPI</td>
                        <td>Auto-generated API reference (REST & GraphQL)</td>
                    </tr>
                    <tr>
                        <td>Real-Time</td>
                        <td>⚠️ Manual setups</td>
                        <td>WebSockets/real-time updates supported</td>
                    </tr>
                    <tr>
                        <td>Extensibility</td>
                        <td>High via plugins/actions</td>
                        <td>Modular extensions & custom interfaces</td>
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
            <p class="lead">The main difference between Fusio and Directus lies in what they are designed to solve and how they handle data and APIs.</p>
        </div>
        <div class="col-6">
            <p><b>Fusio</b> is an API management platform focused on giving developers fine-grained control over the lifecycle, security, and logic of APIs:</p>
            <ul>
                <li>Create and manage structured REST APIs with custom backend logic</li>
                <li>Centralize API security using a built-in OAuth2 authentication server</li>
                <li>Automatically generate OpenAPI documentation for APIs</li>
                <li>Support multiple SQL backends and custom connectors</li>
                <li>Provide API governance and developer workflows</li>
            </ul>
            <p>Fusio emphasizes API lifecycle governance, extensibility, and robust backend workflows for service-oriented architectures.</p>
        </div>
        <div class="col-6">
            <p><b>Directus</b> is a headless CMS and data platform that layers a flexible content/data management interface over an existing SQL database and automatically exposes APIs:</p>
            <ul>
                <li>Instantly generate REST and GraphQL APIs from your database schema</li>
                <li>Provide a visual no-code admin UI for content and data management</li>
                <li>Support role-based access control and granular permissions</li>
                <li>Include tools for workflows, dashboards, automation, and file/media management</li>
                <li>Allow developers to use and customize generated APIs while non-technical users manage content</li>
            </ul>
            <p>Directus focuses on content/data management with seamless API delivery and is optimized for applications where both developers and non-technical users interact with data.</p>
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
                    <li>You need a dedicated API platform with built-in governance, lifecycle tooling, and developer workflows</li>
                    <li>API security (OAuth2), scopes, versioning, and documentation are top priorities</li>
                    <li>You want to manage APIs independently of content workflows</li>
                    <li>You need structured API products, APIs for internal/external consumers, or service APIs</li>
                    <li>Your project requires custom logic and orchestration cases beyond simple CRUD</li>
                </ul>
                <p>Fusio is ideal for teams focused on API productization and integration platforms.</p>
            </div>
            <div class="col-6">
                <p>Choose <b>Directus</b> if:</p>
                <ul>
                    <li>You want a headless CMS with automatic API generation from a database</li>
                    <li>You need a content management UI for non-technical users alongside APIs</li>
                    <li>You prefer a no-code/low-code platform for managing data and workflows</li>
                    <li>Your project benefits from REST and GraphQL APIs without manual API definitions</li>
                    <li>You want built-in support for roles, permissions, automation, and real-time updates</li>
                </ul>
                <p>Directus is excellent for content-centric applications, dashboards, and data-driven apps where a CMS UI matters.</p>
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
