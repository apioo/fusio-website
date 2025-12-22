<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to Symfony</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="row">
        <p class="lead">This page compares <a href="https://www.fusio-project.org/">Fusio</a>, an open-source API management platform for building and managing APIs, with <a href="https://symfony.com/">Symfony</a>, a robust open-source PHP web application framework. While both are used in backend development, they serve very different purposes within the software stack.</p>
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
                        <th>Symfony</th>
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
                        <td>Build, secure, and manage REST APIs</td>
                        <td>Build full web and application backends</td>
                    </tr>
                    <tr>
                        <td>Open Source</td>
                        <td>✅ Yes (Apache 2.0)</td>
                        <td>✅ Yes (MIT)</td>
                    </tr>
                    <tr>
                        <td>API Generation</td>
                        <td>Manual definitions + generators</td>
                        <td>Not built-in (requires custom code or API Platform)</td>
                    </tr>
                    <tr>
                        <td>Authentication & Security</td>
                        <td>Built-in OAuth2</td>
                        <td>Security component (auth, voters, firewalls)</td>
                    </tr>
                    <tr>
                        <td>Custom Logic</td>
                        <td>PHP/JS/SQL actions</td>
                        <td>Full backend code with MVC, services, DI</td>
                    </tr>
                    <tr>
                        <td>Database Support</td>
                        <td>Multiple SQL backends</td>
                        <td>Any via Doctrine or other libraries</td>
                    </tr>
                    <tr>
                        <td>Documentation</td>
                        <td>Auto-generated OpenAPI</td>
                        <td>Framework docs; API docs manual</td>
                    </tr>
                    <tr>
                        <td>Extensibility</td>
                        <td>High via actions/plugins</td>
                        <td>Extremely high via bundles/components</td>
                    </tr>
                    <tr>
                        <td>Target Audience</td>
                        <td>API developers and API products</td>
                        <td>Backend developers building full apps</td>
                    </tr>
                    <tr>
                        <td>Deployment</td>
                        <td>Self-hosted</td>
                        <td>Self-hosted</td>
                    </tr>
                    <tr>
                        <td>Typical Projects</td>
                        <td>API systems and gateways</td>
                        <td>Web apps, services, APIs</td>
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
            <p class="lead">The main difference between Fusio and Symfony lies in their fundamental purpose and abstraction level within backend development.</p>
        </div>
        <div class="col-6">
            <p><b>Fusio</b> is a full API management platform designed for developers who want to define, secure, document, and manage RESTful APIs out of the box:</p>
            <ul>
                <li>Build structured REST APIs with custom backend logic</li>
                <li>Provide unified API management features such as OAuth2 and analytics</li>
                <li>Automatically generate and document OpenAPI APIs</li>
                <li>Focus squarely on API lifecycle and developer workflows</li>
                <li>Integrate easily with multiple existing databases and backend systems</li>
            </ul>
            <p>Fusio is API-first by design and provides a rich set of tools specifically for API creation and management.</p>
        </div>
        <div class="col-6">
            <p><b>Symfony</b> is a general-purpose web application framework that provides reusable PHP components and a foundation for building entire backend systems:</p>
            <ul>
                <li>Offers a modular architecture and MVC pattern for web and API development</li>
                <li>Provides powerful tools like routing, templating, form handling, and services</li>
                <li>Uses a dependency injection container and best-practice conventions</li>
                <li>Can serve APIs, web pages, or complex backend logic</li>
                <li>Requires developers to write controllers, routes, and services manually</li>
            </ul>
            <p>Symfony excels at building custom applications of any scale, but it does not ship with built-in API management tooling like OAuth2 servers or API docs by default, those typically come through libraries or extensions like API Platform.</p>
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
                    <li>You need a dedicated API platform with built-in management, security, and documentation</li>
                    <li>You want to quickly build and expose REST APIs without assembling multiple components</li>
                    <li>Your project focuses on API products, gateways, or multi-tenant API access</li>
                    <li>You prefer tools optimized specifically for API lifecycle workflows</li>
                    <li>You want auto-generated OpenAPI docs and developer portal features</li>
                </ul>
                <p>Fusio is ideal for teams focused on API infrastructure, API monetization, and API system governance.</p>
            </div>
            <div class="col-6">
                <p>Choose <b>Symfony</b> if:</p>
                <ul>
                    <li>You are building a full backend application, not just APIs</li>
                    <li>You need maximum flexibility and control over application architecture</li>
                    <li>You want to leverage a rich ecosystem of reusable PHP components</li>
                    <li>Your project requires deep integration of business logic, services, and UI</li>
                    <li>You plan to build APIs as part of a broader system (often paired with API Platform)</li>
                </ul>
                <p>Symfony is ideal for backend developers building complex applications where API endpoints are just one part of the overall architecture.</p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-info">
                Note: Fusio uses internally also many Symfony components, if you like to use the SDK and OpenAPI generation capabilities
                with Symfony, you can take a look at the <a href="https://phpsx.org/">PSX Framework</a> which is also internally used by Fusio,
                it provides a <a href="https://phpsx.org/integration/symfony/">Symfony Bundle</a> to include all needed services.
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
