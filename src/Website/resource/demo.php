<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Demo</h4>
    <p>We provide a hosted demo of Fusio where you can explore the API, backend 
    and documentation. We have also installed the developer app which shows how
    to quickly create a developer portal around a Fusio API. Note because of 
    security reasons it is not possible to insert, update or delete entries.</p>

    <dl>
      <dt>API</dt>
      <dd><a href="https://demo.fusio-project.org">https://demo.fusio-project.org</a></dd>
      <dt>Fusio Backend</dt>
      <dd><a href="https://demo.fusio-project.org/apps/fusio/">https://demo.fusio-project.org/apps/fusio</a></dd>
      <dt>Developer Portal</dt>
      <dd><a href="https://demo.fusio-project.org/apps/developer/">https://demo.fusio-project.org/apps/developer</a></dd>
      <dt>Documentation</dt>
      <dd><a href="https://demo.fusio-project.org/apps/documentation/">https://demo.fusio-project.org/apps/documentation</a></dd>
      <dt>Swagger-UI</dt>
      <dd><a href="https://demo.fusio-project.org/apps/swagger-ui/">https://demo.fusio-project.org/apps/swagger-ui</a></dd>
    </dl>

    <p>The backend can be accessed with the following user credentials:</p>

    <dl>
      <dt>Username</dt>
      <dd><code>test</code></dd>
      <dt>Password</dt>
      <dd><code>FRsNh1zKCXlB</code></dd>
    </dl>
  </div>
</div>

<div class="fusio-content fusio-edit mdl-grid">
  <div class="mdl-cell mdl-cell--12-col">
    <a href="https://github.com/apioo/fusio-website/blob/main/src/Website/resource/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="material-icons">edit</i> Edit this page</a>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
