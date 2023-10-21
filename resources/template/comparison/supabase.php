<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-lg-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to Supabase</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h4>Technology</h4>
      <p><a href="https://supabase.com/">Supabase</a> is based on Postgres, basically it provides an API using <a href="https://postgrest.org/">PostgREST</a>.
      This means you automatically get a route for each table in your database where you can CRUD entries. To add
      additional business logic Supabase uses Postgres extensions like <a href="https://github.com/plv8/plv8">plv8</a>
      to execute i.e. Javascript. This basically moves your app logic directly into the database. Besides such extensions
      Supabase also provides a way to define functions which can also contain business logic and can be executed.</p>
      <p>With Fusio your API is not build directly on top of your database instead you define an operation where you can
      freely select a route. If the route is invoked it triggers a specific action. An action is similar to a function
      at Supabase where your business logic is contained. You can simply create your own action but it is also possible
      to use our predefined actions solving different tasks like CRUD entries from a database.</p>
      <h4>Fusio</h4>
      <ul>
        <li>Database independent Mysql and Postgres supported</li>
        <li>Easy self-hosting on a simple VHost or large cloud provider</li>
        <li>Business logic can be stored under version control</li>
        <li>Handle authorization and supports multiple external identity provider</li>
        <li>Generate automatically TypeScript definitions for all JSON payloads to build type-safe-apps</li>
        <li>Provides Javascript, PHP, Java, Go and Angular SDKs</li>
      </ul>
      <h4>Supabase</h4>
      <ul>
        <li>Your data is stored in a Postgres database</li>
        <li>Easy to get started since you dont need to setup a backend</li>
        <li>Usage based pricing</li>
        <li>Provides a storage API for files</li>
        <li>Realtime WebSockets support</li>
        <li>Provides a variety of frontend SDKs</li>
      </ul>
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
