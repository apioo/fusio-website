<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Requirements</h4>
    <p>Fusio is written in PHP and requires at least version 7.3 and a database.</p>
    <ul>
      <li>
        <b>PHP &gt;= 7.3</b>
      </li>
      <li>
        <b>Database (supports: MySQL, PostgreSQL, MSSQL, Oracle)</b>
      </li>
    </ul>
  </div>
</div>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Download</h4>
    <p>There are two ways of downloading Fusio:</p>
    <ul>
      <li>
        <a href="<?php echo $router->getAbsolutePath('Fusio\Website\Application\Download::doIndex'); ?>">Download</a>
        the latest release from Github
      </li>
      <li>
        Use composer and run the command <code>composer create-project fusio/fusio</code>
      </li>
    </ul>  
    <p>Place the scripts in the www directory of your web server. After
    successfully downloading Fusio, please continue with the setup process. The
    setup process will help configure Fusio to work properly on your server.</p>
  </div>
</div>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Setup</h4>
    <p>There are two methods of setting up Fusio for your server:</p>
    <ul>
      <li>
        <b>Manual Setup:</b>
        <p></p>
        <b>Adjust the configuration file</b>
        <p>Open the file <code>.env</code> in the Fusio directory and change the
        key <code>FUSIO_URL</code> to the domain pointing to the public folder.
        Also insert the database credentials to the <code>FUSIO_DB_*</code> keys.</p>

        <b>Execute the installation command</b>
        <p>The installation script inserts the Fusio database schema into the
        provided database. It can be executed with the following command
        <code>php bin/fusio install</code>.</p>

        <b>Create administrator user</b>
        <p>After the installation is complete you have to create a new
        administrator account. Therefor you can use the following command
        <code>php bin/fusio adduser</code>. Choose as account type "Administrator".</p>
      </li>
      <li>
        <b>Installation Script:</b>
        <p>To use the install script instead of the manual setup above, point your browser
        to <code>public/install.php</code>. The script will help setup Fusio and 
        configure it to work on your server.</p>
        <p>Once you are done, for security reasons, remove the <code>public/install.php</code>
        script.</p>
      </li>
    </ul>
    <p>Now you are able to login to the backend at <code>/apps/fusio.</code></p>
  </div>
</div>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Build an API endpoint</h4>
    <p>Fusio provides a demo todo API which is ready for deployment. Take a look 
    at the <code>.fusio.yml</code> file which contains the deployment 
    configuration. The file contains several keys:</p>
    <ul>
      <li>
        <b>routes</b>
        <p>Describes for each route the available request methods, whether the
        endpoint is public or private, the available request/response schema and 
        also the action which should be executed:</p>
        <pre><code class="yaml">"/todo": !include resources/routes/todo/collection.yaml
"/todo/:todo_id": !include resources/routes/todo/entity.yaml
</code></pre>
      </li>
      <li>
        <b>connection</b>
        <p>Provides connections to a remote service i.e. mysql or mongodb. This
        connection can be used inside an action. By default we use the System
        connection which uses the database which you have provided at the .env file.
        But through this it is possible to connect to multiple different external
        services.</p>
        <pre><code class="yaml">My-Connection:
  class: Fusio\Adapter\Sql\Connection\Sql
  config:
    type: "pdo_mysql"
    host: "127.0.0.1"
    username: "user"
    password: "pw"
    database: "my_db"
</code></pre>
      </li>
    </ul>
    <p>Through the command <b><code>php bin/fusio deploy</code></b> you can 
    deploy the API. It is now possible to visit the API endpoint at: <code>/todo</code>.</p>
  </div>
</div>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Execute Migrations</h4>
    <p>The demo ToDo API uses a database to store the Todo entries. Fusio
    provides a migration tool to setup and evolve the database schema of your
    API. To setup the tables for the demo Todo API you need to execute the
    migrations through the following command:</p>
    <p><code>php bin/fusio migration:migrate --connection=System</code></p>
    <p>Please take a look at the <a href="https://fusio.readthedocs.io/en/latest/concept/migration.php">manual</a>
    for more information about the migration system.</p>
  </div>
</div>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Access a non-public API endpoint</h4>
    <p>The POST method of the todo API is not public, because of this you need
    an access token in order to post a request.</p>
    <ul>
      <li>
        <b>Assign the scope to your user</b>
        <p>In order to use a scope, the scope must be assigned to your user 
        account. Therefor go to the user panel click on the edit button and 
        assign the <code>todo</code> scope to your user.</p>
      </li>
      <li>
        <b>Request a JWT</b>
        <p>Now you can obtain a JWT through a simple HTTP request to the 
        <code>consumer/login</code> endpoint.</p>
        <pre><code class="http">POST /consumer/login HTTP/1.1
Host: 127.0.0.1
Content-Type: application/json

{
  "username": "[username]",
  "password": "[password]"
}</code></pre>
        <p>Which returns a token i.e.:</p>
        <pre><code class="json">{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI5N2JkNDUzYjdlMDZlOWFlMDQxNi00YmY2MWFiYjg4MDJjZmRmOWZmN2UyNDg4OTNmNzYyYmU5Njc5MGUzYTk4NDQ3MDEtYjNkYTk1MDYyNCIsImlhdCI6MTQ5MTE2NzIzNiwiZXhwIjoxNDkxMTcwODM2LCJuYW1lIjoidGVzdCJ9.T49Af5wnPIFYbPer3rOn-KV5PcN0FLcBVykUMCIAuwI"
}</code></pre>
      </li>
      <li>
        <b>Request the non-public API endpoint</b>
        <p>Now we can use the JWT as Bearer token in the <code>Authorization</code>
        header.</p>
<pre><code class="http">POST /todo HTTP/1.1
Host: 127.0.0.1
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiI5N2JkNDUzYjdlMDZlOWFlMDQxNi00YmY2MWFiYjg4MDJjZmRmOWZmN2UyNDg4OTNmNzYyYmU5Njc5MGUzYTk4NDQ3MDEtYjNkYTk1MDYyNCIsImlhdCI6MTQ5MTE2NzIzNiwiZXhwIjoxNDkxMTcwODM2LCJuYW1lIjoidGVzdCJ9.T49Af5wnPIFYbPer3rOn-KV5PcN0FLcBVykUMCIAuwI
Content-Type: application/json

{
  "title": "lorem ipsum"
}</code></pre>
      </li>
    </ul>
  </div>
</div>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Summarize</h4>
    <p>This was a quick introduction how to build and consume an API with Fusio.
    Please take a look at the <a href="<?php echo $router->getAbsolutePath('Fusio\Website\Application\Documentation::doIndex'); ?>">documentation</a>
    section for more resources.</p>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
