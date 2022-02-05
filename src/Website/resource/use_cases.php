<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
    <div class="mdl-cell mdl-cell--12-col">
        <h4>Use-Cases</h4>
        <p>Fusio is a versatile tool which can be used in many different use cases. The following page should give you
        an overview about the popular use cases of Fusio.</p>
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="mdl-tabs__tab-bar">
                <a href="#spa-backend" class="mdl-tabs__tab is-active">SPA-Backend</a>
                <a href="#api-gateway" class="mdl-tabs__tab">API-Gateway</a>
                <a href="#api-product" class="mdl-tabs__tab">API-Product</a>
                <a href="#api-framework" class="mdl-tabs__tab">API-Framework</a>
                <a href="#low-code-platform" class="mdl-tabs__tab">Low-Code-Platform</a>
            </div>

            <div class="mdl-tabs__panel is-active" id="spa-backend">
                <p>You can use Fusio as backend to build <abbr title="Single-Page-Application">SPAs</abbr> using popular
                Javascript-Frameworks like i.e. Angular, React or Vue. Fusio helps to simply create an authentication process and
                to create the fitting endpoints to obtain and send data for your app. It can be seen as an self-hosted alternative
                solution to services like Firebase.
                <h5>Authentication</h5>
                <p>The following endpoints are needed if your want to build an authentication process.</p>
                <ul>
                    <li>
                        <a href="https://demo.fusio-project.org/apps/internal/#!/api/consumer/login">/consumer/login</a>
                        <p>Basic endpoint to obtain an access token, which then can be used to invoke protected API endpoints.
                        Alternatively you can also use the <code>/authorization/token</code> endpoint for an OAuth2 compatible
                        endpoint.</p>
                    </li>
                    <li>
                        <a href="https://demo.fusio-project.org/apps/internal/#!/api/consumer/register">/consumer/register</a>
                        <p>Through this endpoint it is possible to register a new user. If you want to use a recaptcha to protect
                        the signup you need to enter the credentials <code>RECAPTCHA_KEY</code> and <code>RECAPTCHA_SECRET</code>
                        at the <code>.env</code> file. The process sends a registration email to the user. This email can be
                        customized at <code>resources/config.yaml</code> file. The user then needs to activate his account by
                        visiting the activation link and the app needs to invoke the activate endpoint.</p>
                    </li>
                    <li>
                        <a href="https://demo.fusio-project.org/apps/internal/#!/api/consumer/password_reset">/consumer/password_reset</a>
                        <p>Can be called via <code>POST</code> to initiate a password reset process. This sends an email to the
                        provided email containing a link to reset the password. The app then need to send a <code>PUT</code> request
                        to this endpoint containing the token from the link and the new password. This email can be customized
                        at <code>resources/config.yaml</code> file.</p>
                    </li>
                    <li>
                        <a href="https://demo.fusio-project.org/apps/internal/#!/api/consumer/activate">/consumer/activate</a>
                        <p>This endpoint needs to be called by your app to activate a new registered account. The registration
                        mail contains a link to your app which then needs to call this endpoint containing the token which was
                        provided at the url.</p>
                    </li>
                    <li>
                        <a href="https://demo.fusio-project.org/apps/internal/#!/api/consumer/authorize">/consumer/authorize</a>
                        <p>If you want to build an OAuth2 an "Authorization Code" flow into your app you can use this endpoint.
                        Basically you need to provide the <code>client_id</code> and <code>scope</code> as query parameter to
                        the endpoint and you get information about the app which wants to access data on behalf of the user.
                        If the user wants to grant access you need to send a <code>POST</code> request containing basically all
                        OAuth2 relevant information from the url i.e. <code>response_type</code>, <code>client_id</code>, <code>scope</code>,
                        etc. Fusio then checks all values with the registered app and returns an <code>redirectUri</code> which
                        your frontend can use to redirect the user back to the app.</p>
                    </li>
                </ul>
                <h5>Provider</h5>
                <p>Fusio helps you to automatically create a REST API based on a relational table. This simplifies
                building simple CRUD apps. Therefore you can use a provider s.</p>
                <a href="<?php echo $base; ?>/img/use_cases/provider.png"><img src="<?php echo $base; ?>/img/use_cases/provider.png" width="100%"></a>
                <p>In the background a provider creates the fitting routes and assigns the actions.</p>
                <h5>SDK</h5>
                <p>If you want to use the internal API of Fusio, i.e. to automatically create apps or routes from your application
                you can use our official <a href="https://www.npmjs.com/package/fusio-sdk">Javascript SDK</a>.</p>
            </div>
            <div class="mdl-tabs__panel" id="api-gateway">
                <p>You can use Fusio as API-Gateway. In this case Fusio acts as the single entrypoint for all your internal APIs
                / microservices. Through this you can create all fitting routes which proxy to your internal endpoints.</p>
                <a href="<?php echo $base; ?>/img/use_cases/route.png"><img src="<?php echo $base; ?>/img/use_cases/route.png" width="100%"></a>
                <p>Fusio then covers topics like authorization, rate limiting, validation etc. It also generates automatically
                a complete OpenAPI definition for all your endpoints. Besides this Fusio provides also a documentation app
                which provides a great documentation for all your users.</p>
                <a href="https://demo.fusio-project.org/apps/documentation/#!/api/todo"><img src="<?php echo $base; ?>/img/use_cases/documentation.png" width="100%"></a>
            </div>
            <div class="mdl-tabs__panel" id="api-product">
                <p>The initial use case of Fusio was to create a great API beside an existing web app. We have many users which
                run a traditional web app and they use Fusio to create a state of the art API beside there existing product.
                Fusio can create an API directly on your tables and there are also multiple ways to integrate your
                existing business logic into the API. Fusio provides also a <a href="https://demo.fusio-project.org/apps/developer/#!/">developer app</a>
                which helps to on board new users to use your API i.e.</p>
                <a href="https://demo.fusio-project.org/apps/developer"><img src="<?php echo $base; ?>/img/use_cases/developer.png" width="100%"></a>
            </div>
            <div class="mdl-tabs__panel" id="api-framework">
                <p>You can use Fusio also simply as framework to build an API from scratch. In this case you can develop custom
                actions and use the deploy mechanism. Please take a look at our <a href="https://github.com/apioo/fusio-sample-cms">sample headless CMS</a>
                which shows how to build and structure a complex app using Fusio.</p>
            </div>
            <div class="mdl-tabs__panel" id="low-code-platform">
                <p>You can use Fusio as a Low-Code-Platform. This means that also beginners can use Fusio to build great
                state-of-the-art APIs. In this case the user uses Fusio more like a CMS and builds all routes
                and endpoints through the backend app. With Fusio we want to enable all developers to create great APIs,
                in this sense Fusio tries to be the Wordpress for API developers.</p>
                <p>Fusio provides already many actions to solve common problems without coding</p>
                <a href="#"><img src="<?php echo $base; ?>/img/use_cases/action.png" width="100%"></a>
                <p>If such an action does not solve your problem you can write your backend logic in a custom action.
                Fusio supports multiple programming languages like Java, Javascript, PHP and Python so you can choose
                the tools which you know the most. We also provide a VSCode extension which allows you to connect to
                a remote Fusio instance and develop those extensions directly at the VSCode editor.</p>
                <a href="https://marketplace.visualstudio.com/items?itemName=Fusio.fusio"><img src="<?php echo $base; ?>/img/use_cases/vscode.png" width="100%"></a>
            </div>
        </div>
    </div>
</div>

<div class="fusio-content fusio-edit mdl-grid">
  <div class="mdl-cell mdl-cell--12-col">
    <a href="https://github.com/apioo/fusio-website/blob/main/src/Website/resource/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="material-icons">edit</i> Edit this page</a>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
