<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to Appwrite</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="row">
        <p class="lead">This page compares <a href="https://www.fusio-project.org/">Fusio</a>, an open-source API management platform focused on building and managing APIs, with <a href="https://appwrite.io/">Appwrite</a>, an open-source backend-as-a-service (BaaS) platform that provides a suite of backend services for modern web and mobile applications. While both are tools for backend development, they serve different goals and developer workflows.</p>
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
                        <th>Appwrite</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Type</td>
                        <td>API management platform</td>
                        <td>Backend-as-a-Service (BaaS)</td>
                    </tr>
                    <tr>
                        <td>Primary Use Case</td>
                        <td>Build, secure, and expose REST APIs</td>
                        <td>Full backend functionality for apps</td>
                    </tr>
                    <tr>
                        <td>Open Source</td>
                        <td>✅ Yes (Apache 2.0)</td>
                        <td>✅ Yes (BSD 3-Clause)</td>
                    </tr>
                    <tr>
                        <td>Hosting</td>
                        <td>Self-hosted (Docker, Composer)</td>
                        <td>Self-hosted (Docker), managed cloud options</td>
                    </tr>
                    <tr>
                        <td>Database Support</td>
                        <td>Connects to external SQL databases</td>
                        <td>Built-in database / NoSQL-like collections</td>
                    </tr>
                    <tr>
                        <td>API Generation</td>
                        <td>Manual API definitions with custom logic</td>
                        <td>Auto-generated REST APIs + real-time subscriptions</td>
                    </tr>
                    <tr>
                        <td>Authentication</td>
                        <td>Built-in OAuth2</td>
                        <td>Built-in Auth + OAuth/JWT providers</td>
                    </tr>
                    <tr>
                        <td>Real-Time Features</td>
                        <td>⚠️ Possible via custom logic</td>
                        <td>✅ Built-in real-time subscriptions</td>
                    </tr>
                    <tr>
                        <td>Custom Logic</td>
                        <td>PHP/JS/SQL actions</td>
                        <td>Cloud Functions (multiple runtimes)</td>
                    </tr>
                    <tr>
                        <td>Storage</td>
                        <td>Integration with filesystem / external storage via actions</td>
                        <td>Built-in file/storage API</td>
                    </tr>
                    <tr>
                        <td>SDK Support</td>
                        <td>SDK generators for different languages</td>
                        <td>SDKs for many languages/platforms</td>
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
            <p class="lead">The main difference between Fusio and Appwrite lies in their architectural focus and intended use cases.</p>
        </div>
        <div class="col-6">
            <p><b>Fusio</b> is a developer-centric API management platform designed for teams who want full control over APIs and backend logic:</p>
            <ul>
                <li>Create and manage structured REST APIs with fine-grained control</li>
                <li>Define request/response schemas and security policies</li>
                <li>Secure endpoints using built-in OAuth2 authentication</li>
                <li>Integrate with existing SQL databases (e.g., MySQL, PostgreSQL)</li>
                <li>Execute backend logic via PHP, JavaScript, or SQL actions</li>
            </ul>
            <p>Fusio is responsible for API design, backend logic, and lifecycle workflows and excels when you need precise control over API behavior and documentation.</p>
        </div>
        <div class="col-6">
            <p><b>Appwrite</b> is an all-in-one backend platform that provides a suite of services to build full applications quickly:</p>
            <ul>
                <li>Built-in user authentication with multiple methods</li>
                <li>Database and collections with flexible data models</li>
                <li>Real-time subscriptions and event support</li>
                <li>File and object storage APIs</li>
                <li>Cloud Functions supporting multiple programming languages</li>
                <li>SDKs for web and mobile platforms to accelerate client development</li>
            </ul>
            <p>Appwrite focuses on delivering a rich developer experience for complete app backends, reducing the need to assemble multiple backend services manually.</p>
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
                    <li>You want full control over API design, security, and logic</li>
                    <li>You plan to connect APIs to existing SQL databases or enterprise systems</li>
                    <li>You need built-in API management features like OAuth2 and OpenAPI docs</li>
                    <li>You prefer a self-hosted, provider-independent backend stack</li>
                    <li>Your project is API-first or enterprise/backend focused</li>
                </ul>
                <p>Fusio is ideal for teams that want to build custom APIs that integrate deeply with existing data and business logic.</p>
            </div>
            <div class="col-6">
                <p>Choose <b>Appwrite</b> if:</p>
                <ul>
                    <li>You want to rapidly build full web or mobile backends with minimal setup</li>
                    <li>You need auth, real-time capabilities, storage, and functions out-of-the-box</li>
                    <li>You value SDK support for many client platforms</li>
                    <li>You prefer a backend-as-a-service model that includes most common backend features</li>
                    <li>Your focus is on application development over API infrastructure</li>
                </ul>
                <p>Appwrite is great for frontend developers, MVPs, and teams building full-stack apps without assembling multiple services.</p>
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
