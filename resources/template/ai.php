<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">AI</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center lead">Fusio gives you the power of AI for API development without vendor lock-in.</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
    <div class="container">
        <div class="row g-4 py-4">
            <div class="col-lg-6">
                <div class="fusio-left-image shadow-lg rounded-5 border-1" style="background-image:url('<?php echo $base; ?>/img/ai/connection.png');"></div>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <h3 class="display-6" id="operation"><i class="bi bi-robot"></i> AI Agents</h3>
                <p class="lead">Fusio allows you to connect multiple AI agents and LLM providers to your platform. These
                AI connections can be used to build custom API endpoint logic and automate workflows.</p>
                <p class="lead">All Fusio operations are available as tools for AI agents. This means your AI can create
                actions and schemas directly inside your Fusio instance. While we can't remove the market dominance of
                some LLM providers, Fusio gives you full freedom to switch AI providers at any time.</p>
            </div>
        </div>
        <div class="row g-4 py-4">
            <div class="col-lg-6 text-center text-lg-end">
                <h3 class="display-6" id="action"><i class="bi bi-file-code"></i> Design</h3>
                <p class="lead">The Agent Designer allows you to describe what you want to build using plain language.
                This makes it possible for non-developers to contribute to backend logic, while developers can
                dramatically speed up prototyping and implementation of API endpoints and workflows.</p>
            </div>
            <div class="col-lg-6">
                <div class="fusio-right-image shadow-lg rounded-5 border-1" style="background-image:url('<?php echo $base; ?>/img/ai/messages.png');"></div>
            </div>
        </div>
        <div class="row g-4 py-4">
            <div class="col-lg-6">
                <div class="fusio-left-image shadow-lg rounded-5 border-1" style="background-image:url('<?php echo $base; ?>/img/ai/action.png');"></div>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <h3 class="display-6" id="schema"><i class="bi bi-file-earmark-text-fill"></i> Code</h3>
                <p class="lead">Inside the Agent Designer, Fusio shows you the generated code in real time. You can
                review everything before execution and add additional instructions to refine the logic. This gives you
                full transparency and control over what the AI creates.</p>
            </div>
        </div>
        <div class="row g-4 py-4">
            <div class="col-lg-6 text-center text-lg-end">
                <h3 class="display-6" id="connection"><i class="bi bi-terminal"></i> Execute</h3>
                <p class="lead">After generation, you can execute the AI-generated logic directly inside Fusio. Test
                endpoints, validate schemas, and verify integrations in real time before deploying anything to
                production. This tight feedback loop makes AI-assisted API development fast, reliable, and
                production-ready.</p>
            </div>
            <div class="col-lg-6">
                <div class="fusio-right-image shadow-lg rounded-5 border-1" style="background-image:url('<?php echo $base; ?>/img/ai/execute.png');"></div>
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
