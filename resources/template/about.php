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
                <h3 class="display-6" id="operation"><i class="bi bi-router"></i> Operation</h3>
                <p class="lead">An operation provides a way to invoke an action which executes the business logic of your API,
                it is assigned to a specific HTTP method and path i.e. <code>GET /hello/world</code>. Besides this the operation
                describes through a <a href="#schema">schema</a> how the incoming and outgoing data of your endpoint is designed. Fusio
                then also uses those schemas to validate request data and to automatically generate an OpenAPI specification or client SDK.</p>
            </div>
        </div>
        <div class="row g-4 py-4">
            <div class="col-lg-6 text-center text-lg-end">
                <h3 class="display-6" id="action"><i class="bi bi-code"></i> Action</h3>
                <p class="lead">The action contains the actual business logic of your API i.e. to proxy a request to a
                remote API or directly select data from a database table. You can use either one of our <a href="https://docs.fusio-project.org/docs/backend/api/action/">existing actions</a>
                to solve your problem or you can also easily <a href="https://docs.fusio-project.org/docs/use_cases/api_framework/develop_custom_action">build</a>
                your own action.</p>
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
                <p class="lead">The schema simply describes a JSON payload. We use a schema to describe i.e. request/response
                data of an operation or also event payloads which are dispatched by the system. Every schema is based on <a href="https://typeschema.org/">TypeSchema</a>
                which we also use to generate a client SDK or other specifications like OpenAPI.</p>
            </div>
        </div>
        <div class="row g-4 py-4">
            <div class="col-lg-6 text-center text-lg-end">
                <h3 class="display-6" id="connection"><i class="bi bi-cloud"></i> Connection</h3>
                <p class="lead">A connection provides access to a remote service. I.e. we have a SQL connection which works
                with a SQL database or a HTTP connection which works with a remote HTTP server. One key concept is that
                a connection always uses an external library to connect to the remote service i.e for the SQL connection
                we use the <code>doctrine/dbal</code> library and for the HTTP connection we use <code>guzzlehttp/guzzle</code>.
                A connection returns always a fully configured client which you can use in your action. A remote service
                can be also an external API i.e. we provide connections to Stripe or also AWS which works with the official SDK.
                In your action you can then use those connections to implement your business logic.</p>
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
                <p class="lead">An event gets dispatched by an action in your API, it can be used to create an async
                workflow where external parties are notified in case a specific event occurred at your API. I.e. you
                could create an event "contract_created" and dispatch this event everytime a contract was created at
                your API, then external users can register a webhook and Fusio will invoke this webhook once a contract
                was created. You can describe the payload of your event also by a <a href="#schema">schema</a>.</p>
            </div>
        </div>
        <div class="row g-4 py-4">
            <div class="col-lg-6 text-center text-lg-end">
                <h3 class="display-6" id="cronjob"><i class="bi bi-alarm"></i> Cronjob</h3>
                <p class="lead">A cronjob provides a way to invoke an action at a periodical interval.</p>
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
                <p class="lead">A trigger gets invoked if an event was dispatched. Each trigger has an assigned action which then gets executed.</p>
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
