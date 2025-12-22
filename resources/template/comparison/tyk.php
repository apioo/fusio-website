<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to Tyk</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="row">
        <p class="lead">This comparison explores the differences between <a href="https://www.fusio-project.org/">Fusio</a>, an open-source API management platform, and <a href="https://tyk.io/">Tyk</a>, an open-source API gateway and management solution. While both tools support APIs, they focus on different parts of the API lifecycle with Fusio centered on creating and managing APIs and Tyk emphasizing traffic control and scalability.</p>
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
                        <th>Tyk</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Type</td>
                        <td>Full API management platform</td>
                        <td>API gateway / API management</td>
                    </tr>
                    <tr>
                        <td>Primary Use Case</td>
                        <td>Design, implement, and host APIs</td>
                        <td>Route, secure, and scale API traffic</td>
                    </tr>
                    <tr>
                        <td>Admin UI</td>
                        <td>✅ Built-in web interface</td>
                        <td>✅ Dashboard available (OSS + extended UI)</td>
                    </tr>
                    <tr>
                        <td>Authentication Support</td>
                        <td>✅ Built-in OAuth2</td>
                        <td>✅ OAuth2 & JWT (with external IdP)</td>
                    </tr>
                    <tr>
                        <td>API Documentation</td>
                        <td>✅ Auto-generated OpenAPI</td>
                        <td>⚠️ OpenAPI supported (import/export), not auto-generated</td>
                    </tr>
                    <tr>
                        <td>Extensibility</td>
                        <td>✅ Custom actions (PHP/JS)</td>
                        <td>✅ Middleware/plugins (Go, JS, Python)</td>
                    </tr>
                    <tr>
                        <td>Analytics & Logging</td>
                        <td>✅ Integrated</td>
                        <td>✅ Detailed with quotas & rate limits</td>
                    </tr>
                    <tr>
                        <td>Protocol Support</td>
                        <td>REST APIs</td>
                        <td>REST, GraphQL, gRPC, TCP</td>
                    </tr>
                    <tr>
                        <td>Deployment Options</td>
                        <td>Self-hosted, Docker</td>
                        <td>Self-hosted, hybrid, cloud, Kubernetes native</td>
                    </tr>
                    <tr>
                        <td>Scalability Focus</td>
                        <td>Moderate / application-level</td>
                        <td>High / edge gateway & distributed systems</td>
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
            <p class="lead">The main difference between Fusio and Tyk lies in what part of the API stack they manage.</p>
        </div>
        <div class="col-6">
            <p><b>Fusio</b> is a full API management platform that focuses on the complete API lifecycle:</p>
            <ul>
                <li>Design and implement APIs from scratch</li>
                <li>Define request and response schemas</li>
                <li>Secure APIs using a built-in OAuth2 server and scopes</li>
                <li>Manage users and applications through a centralized admin UI</li>
                <li>Automatically generate OpenAPI documentation</li>
                <li>Execute backend logic using extensible actions (PHP or JavaScript)</li>
            </ul>
            <p>Fusio is responsible for API logic, lifecycle, and developer workflows.</p>
        </div>
        <div class="col-6">
            <p><b>Tyk</b> is an API gateway and traffic management solution that focuses on API delivery and scalability:</p>
            <ul>
                <li>Route and proxy requests to existing APIs and microservices</li>
                <li>Enforce authentication, rate limiting, and quotas</li>
                <li>Apply policies and transformations through middleware and plugins</li>
                <li>Support multiple protocols such as REST, GraphQL, and gRPC</li>
                <li>Scale API traffic in cloud-native and Kubernetes environments</li>
                <li>Integrate with external identity providers and enterprise systems</li>
            </ul>
            <p>Tyk is responsible for API access control, traffic enforcement, and scalability.</p>
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
                    <li>You need a single platform to design, implement, and manage APIs from scratch.</li>
                    <li>Built-in OAuth2 authentication, documentation, and developer workflows matter.</li>
                    <li>You want a self-contained UI for API lifecycle tasks without assembling separate tools.</li>
                    <li>Your API project is backend-centric with tight integration to application logic and data stores.</li>
                </ul>
                <p>Fusio is particularly suited for teams focused on API product development, backend services, and integrated API governance.</p>
            </div>
            <div class="col-6">
                <p>Choose <b>Tyk</b> if:</p>
                <ul>
                    <li>You already have APIs or microservices and need a high-performance gateway in front of them.</li>
                    <li>Your priority is scalability, traffic control, and advanced policy enforcement.</li>
                    <li>You want support for GraphQL or gRPC protocols, multi-cloud deployments, or Kubernetes-native workflows.</li>
                    <li>You plan to leverage middleware plugins and enterprise features for large distributed systems.</li>
                </ul>
                <p>Tyk is especially valuable for DevOps teams, cloud-native environments, and large-scale API infrastructures.</p>
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
