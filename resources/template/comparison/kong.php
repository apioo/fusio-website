<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to Kong</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="row">
        <p class="lead">This page compares <a href="https://www.fusio-project.org/">Fusio</a>, an open-source API management platform, with <a href="https://konghq.com/">Kong</a>, an open-source API gateway. While both projects operate in the API space, they address different layers of the API lifecycle and are often used for different purposes.</p>
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
                        <th>Kong</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Project Type</td>
                        <td>API management platform</td>
                        <td>API gateway / reverse proxy</td>
                    </tr>
                    <tr>
                        <td>Primary Purpose</td>
                        <td>Build, manage, and secure APIs</td>
                        <td>Route, secure, and control API traffic</td>
                    </tr>
                    <tr>
                        <td>API Creation</td>
                        <td>✅ Built-in API design and implementation</td>
                        <td>❌ APIs must already exist</td>
                    </tr>
                    <tr>
                        <td>Admin UI</td>
                        <td>✅ Web-based admin interface</td>
                        <td>⚠️ Admin API (OSS), web UI mainly in enterprise</td>
                    </tr>
                    <tr>
                        <td>Authentication</td>
                        <td>✅ Built-in OAuth2 server</td>
                        <td>⚠️ OAuth2 via plugin</td>
                    </tr>
                    <tr>
                        <td>API Documentation</td>
                        <td>✅ Automatic OpenAPI generation</td>
                        <td>⚠️ OpenAPI supported via plugins or external tooling</td>
                    </tr>
                    <tr>
                        <td>Extensibility</td>
                        <td>✅ Custom actions (PHP / JavaScript)</td>
                        <td>✅ Plugin system (Lua-based)</td>
                    </tr>
                    <tr>
                        <td>Scalability Focus</td>
                        <td>Application-level APIs</td>
                        <td>High-throughput, edge traffic</td>
                    </tr>
                    <tr>
                        <td>Cloud / Kubernetes</td>
                        <td>Supported</td>
                        <td>First-class focus</td>
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
            <p class="lead">The main difference between Fusio and Kong lies in what part of the API stack they manage.</p>
        </div>
        <div class="col-6">
            <p><b>Fusio</b> is a <b>full API management platform</b>. It allows you to:</p>
            <ul>
                <li>Design and implement APIs</li>
                <li>Define request/response schemas</li>
                <li>Secure endpoints using OAuth2 and scopes</li>
                <li>Manage users and applications</li>
                <li>Generate API documentation</li>
                <li>Execute backend logic through extensible actions</li>
            </ul>
            <p>Fusio is responsible for the <b>entire API lifecycle</b>, from creation to consumption.</p>
        </div>
        <div class="col-6">
            <p><b>Kong</b>, on the other hand, is an <b>API gateway</b>. It sits in front of existing services and focuses on:</p>
            <ul>
                <li>Request routing and load balancing</li>
                <li>Authentication and authorization via plugins</li>
                <li>Rate limiting, logging, and traffic control</li>
                <li>High performance and scalability</li>
                <li>Cloud-native and Kubernetes-based deployments</li>
            </ul>
            <p>Kong does <b>not create APIs</b>; it manages and controls access to APIs that already exist.</p>
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
                    <li>You want to build APIs from scratch</li>
                    <li>You need an all-in-one API management solution</li>
                    <li>You want built-in OAuth2, OpenAPI documentation, and developer tooling</li>
                    <li>You prefer a centralized admin UI for API, user, and app management</li>
                    <li>You want a backend-focused API platform with minimal external components</li>
                </ul>
                <p>Fusio is well suited for backend developers, internal APIs, SaaS products, and custom API platforms.</p>
            </div>
            <div class="col-6">
                <p>Choose <b>Kong</b> if:</p>
                <ul>
                    <li>You already have APIs or microservices in place</li>
                    <li>You need a high-performance gateway at the edge</li>
                    <li>You operate in cloud-native or Kubernetes environments</li>
                    <li>You want fine-grained traffic control through plugins</li>
                    <li>You need to scale API traffic across distributed systems</li>
                </ul>
                <p>Kong is ideal for DevOps-driven architectures and large-scale API traffic management.</p>
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
