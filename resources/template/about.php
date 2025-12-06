<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">About</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center lead">This page describes the seven core entities of Fusio to give you a better insight how it works.</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
    <div class="container">
        <div class="row g-4 py-4">
            <div class="col-lg-6">
                <div class="fusio-left-image shadow-lg rounded-5 border-1" style="background-image:url('<?php echo $base; ?>/img/screens/backend_operation_small.png');"></div>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <h3 class="display-6" id="operation"><i class="bi bi-terminal"></i> Operation</h3>
                <p class="lead">An Operation defines an API endpoint: it ties together an HTTP method and a path (for example, <code>GET /hello/world</code>)
                with an underlying action. The operation uses a <a href="#schema">Schema</a> to describe the shape of request and response payloads.
                Fusio uses these schemas to validate incoming data, and can automatically produce an OpenAPI specification
                or client SDK for the defined endpoints.</p>
            </div>
        </div>
        <div class="row g-4 py-4">
            <div class="col-lg-6 text-center text-lg-end">
                <h3 class="display-6" id="action"><i class="bi bi-code"></i> Action</h3>
                <p class="lead">An Action implements the actual business logic behind an endpoint. This could mean proxying
                a request to a remote service, querying a database, performing transformations, or executing custom code.
                Fusio comes with a variety of <a href="https://docs.fusio-project.org/docs/backend/api/action/">built-in actions</a>
                and if needed, you can also <a href="https://docs.fusio-project.org/docs/use_cases/api_framework/develop_custom_action">create custom actions</a>
                tailored to your use case.</p>
            </div>
            <div class="col-lg-6">
                <div class="fusio-right-image shadow-lg rounded-5 border-1" style="background-image:url('<?php echo $base; ?>/img/screens/backend_action_small.png');"></div>
            </div>
        </div>
        <div class="row g-4 py-4">
            <div class="col-lg-6">
                <div class="fusio-left-image shadow-lg rounded-5 border-1" style="background-image:url('<?php echo $base; ?>/img/screens/backend_schema_small.png');"></div>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <h3 class="display-6" id="schema"><i class="bi bi-star"></i> Schema</h3>
                <p class="lead">A Schema defines the structure of a JSON payload. You use schemas to describe request and
                response data for operations and also payloads of internal events. All schemas are based on <a href="https://typeschema.org/">TypeSchema</a>.
                Fusio also uses these schemas to generate client SDKs or API specifications such as OpenAPI.</p>
            </div>
        </div>
        <div class="row g-4 py-4">
            <div class="col-lg-6 text-center text-lg-end">
                <h3 class="display-6" id="connection"><i class="bi bi-cloud"></i> Connection</h3>
                <p class="lead">A Connection defines how to reach an external service. For example, a SQL connection lets
                you talk to a database, while an HTTP connection lets you communicate with a remote HTTP API. When used
                in an action, a connection is resolved into a fully configured client, which the action code can use to
                interact with the external service.</p>
            </div>
            <div class="col-lg-6">
                <div class="fusio-right-image shadow-lg rounded-5 border-1" style="background-image:url('<?php echo $base; ?>/img/screens/backend_connection_small.png');"></div>
            </div>
        </div>
        <div class="row g-4 py-4">
            <div class="col-lg-6">
                <div class="fusio-left-image shadow-lg rounded-5 border-1" style="background-image:url('<?php echo $base; ?>/img/screens/backend_event_small.png');"></div>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <h3 class="display-6" id="event"><i class="bi bi-calendar-event"></i> Event</h3>
                <p class="lead">An Event is a named occurrence emitted by an action when something significant happens
                for example, <code>contract_created</code> after a new contract is stored. Events enable asynchronous workflows:
                interested external parties can register webhooks, and Fusio will call them when the event occurs.
                The events payload can be described via a <a href="#schema">Schema</a>.</p>
            </div>
        </div>
        <div class="row g-4 py-4">
            <div class="col-lg-6 text-center text-lg-end">
                <h3 class="display-6" id="cronjob"><i class="bi bi-alarm"></i> Cronjob</h3>
                <p class="lead">A Cronjob schedules an action to run at regular intervals (e.g. every hour or every day).
                This is useful for tasks such as maintenance, background jobs, batch processing, or scheduled notifications.</p>
            </div>
            <div class="col-lg-6">
                <div class="fusio-right-image shadow-lg rounded-5 border-1" style="background-image:url('<?php echo $base; ?>/img/screens/backend_cronjob_small.png');"></div>
            </div>
        </div>
        <div class="row g-4 py-4">
            <div class="col-lg-6">
                <div class="fusio-left-image shadow-lg rounded-5 border-1" style="background-image:url('<?php echo $base; ?>/img/screens/backend_trigger_small.png');"></div>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <h3 class="display-6" id="trigger"><i class="bi bi-disc"></i> Trigger</h3>
                <p class="lead">A Trigger listens for a specific <a href="#event">Event</a>. When that Event occurs, the
                Trigger executes a configured Action. In this way, you can build automated, event-driven workflows for example:
                when <code>order_placed</code> is dispatched, a trigger runs an action to send a confirmation email.</p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center lead">The following diagram shows the conceptual relation of each entity.</p>
                <img src="<?php echo $base; ?>/img/architecture.png" width="400" alt="Fusio Architecture" class="rounded-5 border-1 mx-auto d-block">
            </div>
        </div>
    </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="fusio-sub-headline h4 fw-normal">🤝 Join the Community</h2>
        <p class="lead">Fusio thrives on community collaboration. Whether you're a developer, blogger, or company, there are numerous ways to get involved:</p>
        <ul class="fusio-list lead">
          <li><b>Contribute</b>: Visit our <a href="https://github.com/apioo/fusio">GitHub repository</a> to contribute code, report issues, or suggest features.</li>
          <li><b>Engage</b>: Join discussions on <a href="https://discord.gg/eMrMgwsc6e">Discord</a> or follow us on <a href="https://twitter.com/FusioAPI">Twitter</a> and <a href="https://www.youtube.com/c/FusioAPI">YouTube</a>.</li>
          <li><b>Support</b>: Consider <a href="https://github.com/apioo/fusio">donating</a> to help sustain and grow the project.</li>
          <li><b>Consulting</b>: For businesses seeking tailored solutions, <a href="https://www.fusio-project.org/contact">contact us</a> for consulting services.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col text-end">
      <a href="https://github.com/apioo/fusio-website/blob/main/resources/template/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="bi bi-pen-fill"></i> Edit this page</a>
    </div>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
