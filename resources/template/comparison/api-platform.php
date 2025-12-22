<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to API Platform</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="row">
        <p class="lead">This page compares <a href="https://www.fusio-project.org/">Fusio</a>, an open-source API management platform designed to build and manage structured APIs with lifecycle tooling, with <a href="https://api-platform.com/">API Platform</a>, an open-source API-first framework for building modern web APIs often on top of Symfony. While both tools help developers create APIs, they target different parts of the development lifecycle and workflows.</p>
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
                        <th>API Platform</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Type</td>
                        <td>API management platform</td>
                        <td>API-first framework</td>
                    </tr>
                    <tr>
                        <td>Primary Use Case</td>
                        <td>Build, secure, document, and manage REST APIs</td>
                        <td>Build modern REST/GraphQL APIs as part of an application</td>
                    </tr>
                    <tr>
                        <td>Open Source</td>
                        <td>✅ Yes (Apache 2.0)</td>
                        <td>✅ Yes (OSL-3.0 / MIT ecosystem)</td>
                    </tr>
                    <tr>
                        <td>API Generation</td>
                        <td>Manual definitions + generators</td>
                        <td>Automatic CRUD/GraphQL generation from models</td>
                    </tr>
                    <tr>
                        <td>Documentation</td>
                        <td>Auto-generated OpenAPI</td>
                        <td>Auto-generated OpenAPI + interactive docs</td>
                    </tr>
                    <tr>
                        <td>Authentication & Security</td>
                        <td>Built-in OAuth2 server</td>
                        <td>Integrates with JWT, OAuth providers, API keys via Symfony Security</td>
                    </tr>
                    <tr>
                        <td>Custom Logic</td>
                        <td>PHP/JS/SQL actions</td>
                        <td>Custom within framework (services, DTOs)</td>
                    </tr>
                    <tr>
                        <td>Response Standards</td>
                        <td>JSON (schema-driven via OpenAPI)</td>
                        <td>JSON-LD, HAL, Hydra, JSON:API, GraphQL</td>
                    </tr>
                    <tr>
                        <td>Extensibility</td>
                        <td>Plugins / action system</td>
                        <td>Symfony ecosystem bundles and extensions</td>
                    </tr>
                    <tr>
                        <td>Typical Projects</td>
                        <td>API products, gateways, microservices</td>
                        <td>API-first applications, rich hypermedia APIs</td>
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
            <p class="lead">The main difference between Fusio and API Platform lies in their fundamental design goals and how they generate and manage APIs.</p>
        </div>
        <div class="col-6">
            <p><b>Fusio</b> is an API management platform focused on giving developers fine-grained control over API behavior, security, and lifecycle:</p>
            <ul>
                <li>Create structured REST APIs with custom backend logic</li>
                <li>Manage OAuth2 security, API scopes, and tokens out of the box</li>
                <li>Automatically generate OpenAPI documentation</li>
                <li>Support multiple SQL databases and backend connectors</li>
                <li>Provide a dedicated dashboard for API governance</li>
            </ul>
            <p>Fusio focuses on API lifecycle management, developer workflows, and governance across complex API systems.</p>
        </div>
        <div class="col-6">
            <p><b>API Platform</b> is an API-first development framework designed to automatically expose your data model as modern APIs with minimal code:</p>
            <ul>
                <li>Generate REST and GraphQL APIs automatically from PHP models/entities</li>
                <li>Support advanced serialization formats (JSON-LD, Hydra, HAL, JSON:API)</li>
                <li>Auto-generate interactive documentation and API explorer UIs</li>
                <li>Integrate authentication/authorization via Symfony Security (JWT/OAuth)</li>
                <li>Use Symfony components and ecosystem for full customization</li>
            </ul>
            <p>API Platform emphasizes rapid API creation with standards support and rich hypermedia features.</p>
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
                    <li>You need a dedicated API management platform with built-in governance and lifecycle tools</li>
                    <li>Security workflows like OAuth2, scopes, admin dashboards, and developer portals are priorities</li>
                    <li>You want API management separate from application frameworks</li>
                    <li>Your project involves multi-database integration or custom backend workflows</li>
                </ul>
                <p>Fusio excels when your focus is on API productization, API governance, and structured API ecosystems.</p>
            </div>
            <div class="col-6">
                <p>Choose <b>API Platform</b> if:</p>
                <ul>
                    <li>You want to rapidly generate APIs from your domain model with minimal boilerplate</li>
                    <li>You need REST and GraphQL support with modern API standards</li>
                    <li>You value hypermedia formats (JSON-LD, Hydra, JSON:API) and rich interactive docs</li>
                    <li>You're already using Symfony or want deep framework integration</li>
                </ul>
                <p>API Platform is ideal for API-first applications and rich API standards support, especially in Symfony ecosystems.</p>
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
