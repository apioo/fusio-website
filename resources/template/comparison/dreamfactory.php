<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to DreamFactory</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="row">
        <p class="lead">This page compares <a href="https://www.fusio-project.org/">Fusio</a>, an open-source API management platform for building and managing APIs, with <a href="https://www.dreamfactory.com/">DreamFactory</a>, an open-source–core REST API automation platform that instantly generates secure APIs for databases and backend services. While both help expose backend data via APIs, they approach the problem from different angles.</p>
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
                        <th>DreamFactory</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Type</td>
                        <td>API management platform</td>
                        <td>API generation & management platform</td>
                    </tr>
                    <tr>
                        <td>Open Source</td>
                        <td>✅ Yes (Apache 2.0)</td>
                        <td>✅ Yes (Open-source core (commercial extensions available))</td>
                    </tr>
                    <tr>
                        <td>API Generation</td>
                        <td>Manual definitions + CRUD generator</td>
                        <td>Instant API generation from databases/services</td>
                    </tr>
                    <tr>
                        <td>API Documentation</td>
                        <td>Auto-generated OpenAPI</td>
                        <td>Auto-generated Swagger docs</td>
                    </tr>
                    <tr>
                        <td>Authentication & Security</td>
                        <td>Built-in OAuth2 server, scopes</td>
                        <td>RBAC, OAuth, API keys (LDAP/SAML/AD in enterprise editions)</td>
                    </tr>
                    <tr>
                        <td>Database Support</td>
                        <td>Multiple SQL backends</td>
                        <td>Over 20 SQL/NoSQL data sources</td>
                    </tr>
                    <tr>
                        <td>Custom Logic</td>
                        <td>PHP/JS/SQL actions</td>
                        <td>Server-side scripting (NodeJS/PHP/Python)</td>
                    </tr>
                    <tr>
                        <td>Extensibility</td>
                        <td>High (backend actions/plugins)</td>
                        <td>Flexible scripting & transformations</td>
                    </tr>
                    <tr>
                        <td>Deployment</td>
                        <td>Self-hosted (Docker, Composer)</td>
                        <td>Self-hosted (Docker, VM, bare metal)</td>
                    </tr>
                    <tr>
                        <td>Use Case Focus</td>
                        <td>API lifecycle and developer workflows</td>
                        <td>Rapid API exposure for data & backend services</td>
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
            <p class="lead">The main difference between Fusio and DreamFactory lies in how they approach API creation, management, and customization.</p>
        </div>
        <div class="col-6">
            <p><b>Fusio</b> is a full API management platform that gives developers fine-grained control over how APIs are defined and behave:</p>
            <ul>
                <li>Build and manage structured APIs with custom logic</li>
                <li>Integrate with multiple SQL databases using connectors</li>
                <li>Provide fine-tuned access control using a built-in OAuth2 server</li>
                <li>Automatically generate OpenAPI documentation</li>
                <li>Implement complex backend workflows using PHP, JavaScript, or SQL actions</li>
            </ul>
            <p>Fusio focuses on API lifecycle, security policies, and extensibility across a variety of backend systems.</p>
        </div>
        <div class="col-6">
            <p><b>DreamFactory</b> is an API automation and runtime platform that generates secure REST APIs with minimal setup and provides centralized API access:</p>
            <ul>
                <li>Instantly generate REST APIs for over 20 database and data service types</li>
                <li>Provide a comprehensive admin console for managing APIs</li>
                <li>Apply role-based access control with support for OAuth, LDAP, SAML, API keys</li>
                <li>Auto-generate interactive Swagger (OpenAPI) documentation</li>
                <li>Customize API behavior with server-side scripting (NodeJS, PHP, Python)</li>
            </ul>
            <p>DreamFactory focuses on rapidly exposing backend systems and data sources via secure, ready-to-use APIs.</p>
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
                    <li>You want an API platform with rich developer and lifecycle tooling</li>
                    <li>Your project relies on multi-database or complex enterprise backends</li>
                    <li>You want to integrate OAuth2, scopes, versioning, and detailed API governance</li>
                    <li>You need flexible self-hosting and provider-independent deployment</li>
                </ul>
                <p>Fusio is ideal when APIs are a core product and require structured workflows and deep extensibility.</p>
            </div>
            <div class="col-6">
                <p>Choose <b>DreamFactory</b> if:</p>
                <ul>
                    <li>You want to instantly expose databases and backend services as REST APIs</li>
                    <li>You prefer auto-generated API documentation and endpoints</li>
                    <li>You need enterprise-ready authentication (RBAC, OAuth, LDAP, SAML)</li>
                    <li>You work with legacy systems or many different data sources</li>
                    <li>You want to use server-side scripting to customize API behavior without heavy coding</li>
                </ul>
                <p>DreamFactory is excellent for rapid integration projects, data-centric APIs, and backend abstraction layers.</p>
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
