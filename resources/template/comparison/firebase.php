<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-headline">
    <div class="container">
        <div class="row">
            <div class="col p-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Compare Fusio to Firebase</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h4>Technology</h4>
      <p><a href="https://firebase.google.com/">Firebase</a> provides its own NoSQL database where all your data is
      stored, it is an easy-to-use and scalable way to store your data but this means your data is stored in a proprietary
      database. You can then use the SDK of Firebase to i.e. set <code>db.collection("cities").doc("[ID]").set(docData)</code>
      or get <code>db.collection("cities").doc("[id]").get()</code> data in your app. To handle additional business logic
      you can use Cloud Functions which can be called directly from your app.</p>
      <p>Fusio has a different approach, instead of directly working with a database you need to define operations,
      an operation is assigned to a specific HTTP route like <code>GET /cities</code> which then invokes an action on
      invocation. An action is basically like a Cloud Function which contains your business logic and which produces
      a response. Through this approach Fusio generates fully typed client SDKs. This means your SDK is not generic
      instead it represents your concrete use-case. I.e. the generated SDK would look like <code>client.cities().create(docData)</code>
      or <code>client.cities().get("[id]")</code> with complete type-safe models.</p>
      <h4>Fusio</h4>
      <ul>
        <li>Classical relational database like Mysql or Postgres</li>
        <li>Easy self-hosting on a simple VHost or large cloud provider</li>
        <li>Generate fully type-safe TypeScript definitions</li>
        <li>Build a cleaner design for your app by using a DI container</li>
        <li>Handle authorization and supports multiple external identity provider</li>
        <li>Provides Javascript, PHP, Java, Go and Angular SDKs</li>
      </ul>
      <h4>Firebase</h4>
      <ul>
        <li>Easy to get started</li>
        <li>Hosted in the Google Cloud which provides great performance and scaling</li>
        <li>Use Cloud Functions to handle additional business logic</li>
        <li>High usage based pricing</li>
        <li>Vendor lock-in</li>
        <li>Proprietary database</li>
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
