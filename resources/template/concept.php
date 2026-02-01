<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Concept</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center lead">Fusio offers some unique concepts which are described on this page.</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 id="marketplace" class="fusio-sub-headline h4 fw-normal">🧩 Marketplace</h2>
                <p class="lead mb-5">The Fusio marketplace is integrated into the backend app of Fusio, it can be seen
                    like an app store where you can install and provide Fusio related entities. To publish entities to
                    the marketplace you need to <a href="<?php echo $router->getAbsolutePath([\App\Controller\Marketplace::class, 'show']); ?>">register</a>
                    and then you can publish actions, schemas etc. directly from your local instance to the marketplace.
                    Our vision is that the marketplace becomes a thriving platform where our users can share bundles and
                    apps to build something bigger.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="row">
        <div class="col">
            <h2 id="development" class="fusio-sub-headline h4 fw-normal">🛠️ Development</h2>
            <p class="lead">With Fusio we want to enable everybody to build great APIs, therefor we have developed a
            flexible <a href="https://docs.fusio-project.org/docs/use_cases/api_gateway/worker">worker system</a> which
            allows you to build actions in different programming languages. Inside your action you can get all
            configured connections to implement your business logic.
            </p>
            <ul class="nav nav-tabs" id="developmentTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="php-tab" data-bs-toggle="tab" data-bs-target="#php-tab-pane" type="button" role="tab" aria-controls="php-tab-pane" aria-selected="true">PHP</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="javascript-tab" data-bs-toggle="tab" data-bs-target="#javascript-tab-pane" type="button" role="tab" aria-controls="javascript-tab-pane" aria-selected="false">JavaScript</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="python-tab" data-bs-toggle="tab" data-bs-target="#python-tab-pane" type="button" role="tab" aria-controls="python-tab-pane" aria-selected="false">Python</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="java-tab" data-bs-toggle="tab" data-bs-target="#java-tab-pane" type="button" role="tab" aria-controls="java-tab-pane" aria-selected="false">Java/Groovy</button>
                </li>
            </ul>
            <div class="tab-content" id="developmentTabContent">
                <div class="tab-pane fade show active" id="php-tab-pane" role="tabpanel" aria-labelledby="php-tab" tabindex="0">
                    <pre><code class="language-php">&lt;?php

use Fusio\Worker;
use Fusio\Engine;
use Psr\Log\LoggerInterface;

return function(Worker\ExecuteRequest $request, Worker\ExecuteContext $context, Engine\ConnectorInterface $connector, Engine\Response\FactoryInterface $response, Engine\DispatcherInterface $dispatcher, LoggerInterface $logger) {

    $connection = $connector->getConnection('my_database');

    // @TODO implement my API endpoint logic

    return $response->build(200, [], [
        'hello' => 'world',
    ]);
};</code></pre>
                </div>
                <div class="tab-pane fade" id="javascript-tab-pane" role="tabpanel" aria-labelledby="javascript-tab" tabindex="1">
                    <pre><code class="language-javascript">module.exports = async function(request, context, connector, response, dispatcher, logger) {

    const connection = await connector.getConnection('my_database');

    // @TODO implement my API endpoint logic

    return response.build(200, {}, {
        hello: 'world'
    });
};</code></pre>
                </div>
                <div class="tab-pane fade" id="python-tab-pane" role="tabpanel" aria-labelledby="python-tab" tabindex="2">
                    <pre><code class="language-python">def handle(request, context, connector, response, dispatcher, logger):

    connection = connector.get_connection('my_database')

    # @TODO implement my API endpoint logic

    return response.build(200, None, {
        'hello': 'world'
    })</code></pre>
                </div>
                <div class="tab-pane fade" id="java-tab-pane" role="tabpanel" aria-labelledby="java-tab" tabindex="3">
                    <pre><code class="language-groovy">import org.fusioproject.worker.runtime.generated.ExecuteRequest;
import org.fusioproject.worker.runtime.generated.ExecuteContext;
import org.fusioproject.worker.runtime.Connector;
import org.fusioproject.worker.runtime.ResponseBuilder;
import org.fusioproject.worker.runtime.Dispatcher;
import org.fusioproject.worker.runtime.Logger;

def handle(ExecuteRequest request, ExecuteContext context, Connector connector, ResponseBuilder response, Dispatcher dispatcher, Logger logger) {

    def connection = connector.getConnection("my_database");

    // @TODO implement my API endpoint logic

    return response.build(200, [:], [
        hello: "world"
    ]);
}</code></pre>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 id="sdk" class="fusio-sub-headline h4 fw-normal">🛠️ AI Framework</h2>
                <p class="lead">Fusio is not just an API management platform, it also acts as an <b>AI framework</b>
                for building and running AI-generated backend logic safely. Instead of letting AI operate in an uncontrolled
                environment, Fusio provides a solid, hand-crafted foundation where <a href="<?php echo $router->getAbsolutePath([\App\Controller\AI::class, 'show']); ?>">AI-generated code</a>
                can be executed, validated, and managed in a secure and predictable way.</p>
                <p class="lead mb-5">By embedding AI capabilities directly into the Fusio platform, you get the best of both
                worlds: A stable, well-defined API framework and the flexibility of AI-assisted development. AI-generated
                actions, schemas, and endpoints run inside Fusio's controlled execution environment. This ensures that
                generated code follows your platform rules, permissions, and security model. The result is safe AI-powered
                API development without compromising reliability, maintainability, or security.</p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
    <div class="row">
        <div class="col">
            <h2 id="technology" class="fusio-sub-headline h4 fw-normal">⚙️ Technology</h2>
            <p class="lead">Fusio was primarily designed to build REST APIs but over the time we have
                implemented different technologies which help you to access your Fusio operations in different ways.
            </p>
            <ul class="nav nav-tabs" id="technologyTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="mcp-tab" data-bs-toggle="tab" data-bs-target="#mcp-tab-pane" type="button" role="tab" aria-controls="mcp-tab-pane" aria-selected="true">MCP</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="graphql-tab" data-bs-toggle="tab" data-bs-target="#graphql-tab-pane" type="button" role="tab" aria-controls="graphql-tab-pane" aria-selected="false">GraphQL</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="jsonrpc-tab" data-bs-toggle="tab" data-bs-target="#jsonrpc-tab-pane" type="button" role="tab" aria-controls="jsonrpc-tab-pane" aria-selected="false">JsonRPC</button>
                </li>
            </ul>
            <div class="tab-content" id="technologyTabContent">
                <div class="tab-pane fade show active" id="mcp-tab-pane" role="tabpanel" aria-labelledby="mcp-tab" tabindex="0">
                    <p class="lead mt-3 mb-5">Fusio provides an <a href="https://docs.fusio-project.org/docs/use_cases/api_product/mcp_integration">MCP server</a> which
                    exposes all operations as tools. This can help to build and configure a Fusio instance since an LLM can
                    use and discover all available entities.</p>
                </div>
                <div class="tab-pane fade show" id="graphql-tab-pane" role="tabpanel" aria-labelledby="graphql-tab" tabindex="1">
                    <p class="lead mt-3 mb-5">Fusio implements a readonly <a href="https://docs.fusio-project.org/docs/concepts/graphql">GraphQL</a> endpoint
                    which can be used to query all GET operations of your API.
                    </p>
                </div>
                <div class="tab-pane fade show" id="jsonrpc-tab-pane" role="tabpanel" aria-labelledby="jsonrpc-tab" tabindex="2">
                    <p class="lead mt-3 mb-5">Fusio implements a classical <a href="https://docs.fusio-project.org/docs/concepts/jsonrpc">JsonRPC</a> server
                    which allows you to invoke every operation via JsonRPC. While we generally recommend to use REST APIs
                    there are some circumstances where JsonRPC can be useful.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 id="sdk" class="fusio-sub-headline h4 fw-normal">📦 SDK</h2>
                <p class="lead mb-5">Fusio includes a sophisticated <a href="https://docs.fusio-project.org/docs/use_cases/api_gateway/generate_sdk">code generator</a>
                    which generates client SDKs and OpenAPI specifications. Through this you can build fully typed
                    client/server connections which help you to move fast and detect errors early. It also helps to
                    automatically provide client SDKs to your customers so that they can easily integrate your API.
                </p>
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
