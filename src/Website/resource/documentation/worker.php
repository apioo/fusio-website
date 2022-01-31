<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-block mdl-grid mdl-shadow--2dp fusio-api">
  <div class="mdl-cell mdl-cell--3-col mdl-color--grey-100">
    <ul class="fusio-api-nav">
      <li>
        <a>Documentation</a>
        <ul>
          <li><a href="#introduction">Introduction</a></li>
          <li><a href="#configuration">Configuration</a></li>
        </ul>
        <a>RPC</a>
        <ul>
          <li><a href="#methods">Methods</a></li>
        </ul>
        <a>Types</a>
        <ul>
          <li><a href="#Fusio.Adapter.Sql.Connection.Sql">Fusio.Adapter.Sql.Connection.Sql</a></li>
          <li><a href="#Fusio.Adapter.Sql.Connection.SqlAdvanced">Fusio.Adapter.Sql.Connection.SqlAdvanced</a></li>
          <li><a href="#Fusio.Adapter.Http.Connection.Http">Fusio.Adapter.Http.Connection.Http</a></li>
          <li><a href="#Fusio.Adapter.Mongodb.Connection.MongoDB">Fusio.Adapter.Mongodb.Connection.MongoDB</a></li>
          <li><a href="#Fusio.Adapter.Elasticsearch.Connection.Elasticsearch">Fusio.Adapter.Elasticsearch.Connection.Elasticsearch</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="mdl-cell mdl-cell--9-col">
    <h4 id="introduction">Worker API</h4>
    <p>Fusio provides support to implement actions in multiple different programming languages. To support these
    different languages Fusio uses a worker system. This means that the action code is not directly executed but instead
    the request gets forwarded to a worker which then executes the action and returns a response. The worker is then
    implemented in the target programming language which we want to support i.e. Javascript, Python or Java. Through
    this your action code can use all features of the language. You can find a list of worker implementations at our
    <a href="<?php echo $url . 'worker'; ?>">overview page</a>. To support a specific language you only need to implement
    a worker which provides a simple RPC interface.</p>

    <h5 id="configuration">Configuration</h5>
    <p>To use a worker at your Fusio instance, you need to add the fitting worker urls at the
    <code>configuration.php</code> file. After this Fusio will automatically invoke the fitting methods in case an
    connection or action is created or changed. Then it is also possible to use one of the worker actions.</p>
    <pre><code class="hljs php">'fusio_worker'            => [
    'java'                => 'my_java_worker:9090',
    'javascript'          => 'my_javascript_worker:9091',
    'php'                 => 'my_php_worker:9092',
    'python'              => 'my_python_worker:9093',
],
</code></pre>

    <hr>

    <h4 id="methods">Methods</h4>
    <p>The RPC system is based on <a href="https://thrift.apache.org/">Thrift</a>. The following documentation shows
    the rendered thrift file. If you want to implement a worker in a specific language you can checkout our
    <a href="https://github.com/apioo/fusio-impl/blob/master/src/Worker/worker.thrift">thrift file</a>.</p>

    <iframe src="<?php echo $base; ?>/static/worker/worker.html" width="100%" height="600"></iframe>

    <hr>

    <h4 id="types">Types</h4>
    <p>This section contains a list of supported connection types. A connection type basically represents a connection
    to a popular service which is available in most programming languages i.e. like mysql or http. At an action the user
    obtains such a connection through the connection manager so that a user does not need to configure such services at
    an action. The worker decides which implementation should be used for a specific type but it is recommended to use
    either a native or popular solution so that most developers know how to work with this service. I.e. our nodejs
    worker uses the <code>mysql2</code> npm package to provide a mysql connection and <code>axios</code> as http client.</p>

    <h5 id="Fusio.Adapter.Sql.Connection.Sql">Fusio.Adapter.Sql.Connection.Sql</h5>
    <p>A simple connection to a database. The type defines which database we try to connect. Your worker does not need
    to support all types but you should at least implement mysql support.</p>
    <pre><code class="hljs json">{
  "type": "pdo_mysql",
  "host": "db host",
  "username": "db user",
  "password": "db password",
  "database": "db name"
}</code></pre>
    <table class="mdl-data-table mdl-js-data-table fusio-api-table">
      <colgroup>
        <col width="150">
        <col width="*">
      </colgroup>
      <thead>
      <tr>
        <th class="mdl-data-table__cell--non-numeric">Type</th>
        <th class="mdl-data-table__cell--non-numeric">Description</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="mdl-data-table__cell--non-numeric">pdo_mysql</td>
        <td class="mdl-data-table__cell--non-numeric">Connection to a MySQL or MariaDB server</td>
      </tr>
      <tr>
        <td class="mdl-data-table__cell--non-numeric">pdo_pgsql</td>
        <td class="mdl-data-table__cell--non-numeric">Connection to a PostgreSQL server</td>
      </tr>
      <tr>
        <td class="mdl-data-table__cell--non-numeric">sqlsrv</td>
        <td class="mdl-data-table__cell--non-numeric">Connection to a MSSQL server</td>
      </tr>
      <tr>
        <td class="mdl-data-table__cell--non-numeric">oci8</td>
        <td class="mdl-data-table__cell--non-numeric">Connection to a Oracle server</td>
      </tr>
      <tr>
        <td class="mdl-data-table__cell--non-numeric">sqlanywhere</td>
        <td class="mdl-data-table__cell--non-numeric">Connection to a SAP Sybase SQL Anywhere server</td>
      </tr>
      </tbody>
    </table>

    <h5 id="Fusio.Adapter.Sql.Connection.SqlAdvanced">Fusio.Adapter.Sql.Connection.SqlAdvanced</h5>
    <p>Basically this is the same connection as sql but we use a connection string to connect to a database. Through
    this it is possible to pass additional arguments to the connection.</p>
    <pre><code class="hljs json">{
  "url": "mysql://user:secret@localhost/mydb"
}</code></pre>

    <h5 id="Fusio.Adapter.Http.Connection.Http">Fusio.Adapter.Http.Connection.Http</h5>
    <p>A HTTP client to make requests. The url parameter indicates the base url. The username, password and proxy
    settings are optional.</p>
    <pre><code class="hljs json">{
  "url": "https://api.acme.com",
  "username": "foo",
  "password": "bar",
  "proxy": "proxy ip"
}</code></pre>

    <h5 id="Fusio.Adapter.Mongodb.Connection.MongoDB">Fusio.Adapter.Mongodb.Connection.MongoDB</h5>
    <p>A connection to a MongoDB server.</p>
    <pre><code class="hljs json">{
  "url": "mongodb://localhost:27017",
  "database": "my_db"
}</code></pre>

    <h5 id="Fusio.Adapter.Elasticsearch.Connection.Elasticsearch">Fusio.Adapter.Elasticsearch.Connection.Elasticsearch</h5>
    <p>A connection to a Elasticsearch server.</p>
    <pre><code class="hljs json">{
  "host": "192.168.1.1:9200,192.168.1.2"
}</code></pre>
  </div>
</div>

<?php include(__DIR__ . '/../inc/footer.php'); ?>
