<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to WSO2</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="row">
        <p class="lead">This page compares <a href="https://www.fusio-project.org/">Fusio</a>, an open-source API management platform focused on building and managing APIs, with <a href="https://wso2.com/">WSO2 API Manager</a>, a comprehensive enterprise-grade open-source API management solution. While both tools support API workflows, they address different scopes and use cases within the API ecosystem.</p>
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
                        <th>WSO2 API Manager</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Type</td>
                        <td>Full API management platform</td>
                        <td>Full-lifecycle API management platform</td>
                    </tr>
                    <tr>
                        <td>Primary Use Case</td>
                        <td>Build, secure, and manage APIs</td>
                        <td>Enterprise API governance, security, and scaling</td>
                    </tr>
                    <tr>
                        <td>Admin UI</td>
                        <td>✅ Integrated web interface</td>
                        <td>✅ Comprehensive dashboard</td>
                    </tr>
                    <tr>
                        <td>OAuth2 / Auth Support</td>
                        <td>✅ Built-in OAuth2 server</td>
                        <td>✅ Advanced OAuth2 / OIDC, API key, mutual TLS support</td>
                    </tr>
                    <tr>
                        <td>API Documentation</td>
                        <td>✅ Auto-generated OpenAPI</td>
                        <td>✅ Integrated API publishing & docs</td>
                    </tr>
                    <tr>
                        <td>API Creation</td>
                        <td>✅ Backend logic & action execution</td>
                        <td>⚠️ API design within tool; backend implementation external</td>
                    </tr>
                    <tr>
                        <td>Gateway & Traffic Control</td>
                        <td>Integrated routing & middleware (not a dedicated edge gateway)</td>
                        <td>Robust gateway with traffic control & policy enforcement</td>
                    </tr>
                    <tr>
                        <td>Analytics & Monitoring</td>
                        <td>Integrated basic analytics</td>
                        <td>Advanced analytics, usage insights, observability</td>
                    </tr>
                    <tr>
                        <td>Extensibility</td>
                        <td>PHP/JS actions</td>
                        <td>Java-based extensions, plugin ecosystem</td>
                    </tr>
                    <tr>
                        <td>Deployment</td>
                        <td>Self-hosted (Docker, Composer)</td>
                        <td>Self-hosted, cloud, hybrid, Kubernetes</td>
                    </tr>
                    <tr>
                        <td>Enterprise Features</td>
                        <td>⚠️ Focused on developer needs</td>
                        <td>✅ Full life cycle, developer portal, monetization</td>
                    </tr>
                    <tr>
                        <td>Target Audience</td>
                        <td>Developers & small teams</td>
                        <td>Large organizations & enterprise API programs</td>
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
            <p class="lead">The main difference between Fusio and WSO2 API Manager lies in the scope and complexity of API management they address.</p>
        </div>
        <div class="col-6">
            <p><b>Fusio</b> is a developer-centric API management platform focused on building and managing APIs with minimal overhead:</p>
            <ul>
                <li>Design and implement APIs from scratch</li>
                <li>Define request and response schemas</li>
                <li>Secure APIs using a built-in OAuth2 server and scopes</li>
                <li>Manage users and applications through a centralized admin UI</li>
                <li>Automatically generate OpenAPI documentation</li>
                <li>Execute backend logic using extensible actions (PHP or JavaScript)</li>
            </ul>
            <p>Fusio is responsible for API creation, logic, and lifecycle management in a lightweight and integrated way.</p>
        </div>
        <div class="col-6">
            <p><b>WSO2 API Manager</b> is an enterprise-grade full-lifecycle API management solution designed for large organizations:</p>
            <ul>
                <li>Publish and manage APIs across their entire lifecycle</li>
                <li>Provide a robust API gateway with traffic control and policy enforcement</li>
                <li>Support advanced security (OAuth2, OIDC, mTLS, SSO, API keys)</li>
                <li>Offer developer portals, subscription plans, and monetization</li>
                <li>Deliver advanced analytics, observability, and governance features</li>
                <li>Integrate deeply with enterprise identity and infrastructure systems</li>
            </ul>
            <p>WSO2 API Manager is responsible for enterprise governance, security, and large-scale API operations.</p>
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
                    <li>You want a developer-friendly platform to build and manage APIs end-to-end.</li>
                    <li>Built-in OAuth2 support, auto-generated docs, and extensibility are priorities.</li>
                    <li>You prefer a lightweight, self-contained solution with minimal infrastructure overhead.</li>
                    <li>You are a small team, startup, or backend developer working on API products.</li>
                </ul>
                <p>Fusio excels for projects where API logic and data access are central and need to be controlled within a single, integrated platform.</p>
            </div>
            <div class="col-6">
                <p>Choose <b>WSO2 API Manager</b> if:</p>
                <ul>
                    <li>You are building or governing large-scale enterprise APIs across teams and environments.</li>
                    <li>You need advanced security, multi-tenant support, monetization, and developer portals.</li>
                    <li>You operate in cloud, hybrid, or highly regulated environments.</li>
                    <li>You require granular policy enforcement, traffic governance, and deep analytics.</li>
                </ul>
                <p>WSO2 API Manager is ideal for organizations with complex API programs looking for enterprise governance, scalability, and ecosystem management.</p>
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
