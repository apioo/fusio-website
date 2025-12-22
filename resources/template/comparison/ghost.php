<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to Ghost</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="row">
        <p class="lead">This page compares <a href="https://www.fusio-project.org/">Fusio</a>, an open-source API management platform for building and managing structured APIs, with <a href="https://ghost.org/">Ghost</a>, an open-source headless content management system (CMS) and professional publishing platform. Although both support APIs, they serve different needs: Fusio focuses on general API lifecycle and backend services, while Ghost specializes in content publishing and headless delivery.</p>
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
                        <th>Ghost</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Type</td>
                        <td>API management platform</td>
                        <td>Headless CMS & publishing platform</td>
                    </tr>
                    <tr>
                        <td>Primary Use Case</td>
                        <td>Design, secure, document, and manage REST APIs</td>
                        <td>Publish, manage, and deliver content via API</td>
                    </tr>
                    <tr>
                        <td>Open Source</td>
                        <td>✅ Yes (Apache 2.0)</td>
                        <td>✅ Yes (MIT)</td>
                    </tr>
                    <tr>
                        <td>API Generation</td>
                        <td>Manual definition + structured design</td>
                        <td>Built-in REST JSON API for content</td>
                    </tr>
                    <tr>
                        <td>Documentation</td>
                        <td>Auto-generated OpenAPI</td>
                        <td>API docs available, not auto OpenAPI</td>
                    </tr>
                    <tr>
                        <td>Authentication & Security</td>
                        <td>Built-in OAuth2 server</td>
                        <td>API keys (Content API), JWT (Admin API)</td>
                    </tr>
                    <tr>
                        <td>Custom Logic</td>
                        <td>PHP/JS/SQL actions</td>
                        <td>Limited backend extensibility; content-focused logic</td>
                    </tr>
                    <tr>
                        <td>Content Management UI</td>
                        <td>⚠️ API-centric admin UI</td>
                        <td>✅ Full CMS UI for authors & editors</td>
                    </tr>
                    <tr>
                        <td>Real-Time</td>
                        <td>⚠️ Manual integrations</td>
                        <td>⚠️ Not core, some webhook support</td>
                    </tr>
                    <tr>
                        <td>Extensibility</td>
                        <td>Plugins & custom actions</td>
                        <td>Integrations, themes, webhooks</td>
                    </tr>
                    <tr>
                        <td>Deployment</td>
                        <td>Self-hosted</td>
                        <td>Self-hosted or Ghost(Pro) managed</td>
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
            <p class="lead">The main difference between Fusio and Ghost lies in how they are designed to work and the type of backend workloads they solve.</p>
        </div>
        <div class="col-6">
            <p><b>Fusio</b> is a full API management platform that gives developers control over API design, security, governance, and custom behavior:</p>
            <ul>
                <li>Create and manage structured REST APIs with detailed schemas</li>
                <li>Centralize API security with built-in OAuth2 and scopes</li>
                <li>Generate OpenAPI documentation automatically</li>
                <li>Execute backend logic using PHP, JavaScript, or SQL actions</li>
                <li>Provide lifecycle, access control, and developer workflows</li>
            </ul>
            <p>Fusio is optimized for building general-purpose APIs and backend services, where logic, security, and governance are key.</p>
        </div>
        <div class="col-6">
            <p><b>Ghost</b> is a headless content management and publishing platform that delivers content via a RESTful JSON API:</p>
            <ul>
                <li>Manage content (posts, pages, tags, authors) via the admin UI</li>
                <li>Expose data through a read-only Content API and write-enabled Admin API</li>
                <li>Designed for publishing workflows and editorial teams</li>
                <li>Integrates smoothly with frontend frameworks (Next.js, Gatsby) via API</li>
                <li>Includes features like SEO, newsletters, memberships (on managed Ghost(Pro))</li>
            </ul>
            <p>Ghost is ideal for content delivery and publishing, not general API management.</p>
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
                    <li>You need a backend platform that centralizes API governance, security, and custom logic</li>
                    <li>Building structured APIs for a wide range of services (not just content) is your priority</li>
                    <li>You want built-in API management features like OAuth2, scopes, and autogenerated documentation</li>
                    <li>Your APIs are consumed by external developers or systems, not just frontends</li>
                </ul>
                <p>Fusio is best for teams looking to build API products, backend services, or integration platforms.</p>
            </div>
            <div class="col-6">
                <p>Choose <b>Ghost</b> if:</p>
                <ul>
                    <li>You want a headless CMS tailored for content publishing and delivery</li>
                    <li>You need a rich editorial UI for authors together with a backend API</li>
                    <li>Your project revolves around creating posts, pages, magazines, blogs, or newsletters</li>
                    <li>You plan to serve content to web apps, static sites, or mobile apps via API</li>
                </ul>
                <p>Ghost is ideal for content-centric applications and modern headless publishing.</p>
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
