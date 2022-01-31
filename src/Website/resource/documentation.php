<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Documentation</h4>
    <p>Here we list all available documentation resources. If these resources
    dont answer your questions or you want to provide feedback feel free to
    send a message to the <a href="https://groups.google.com/forum/#!forum/fusio">Forum</a>
    or create an issue on <a href="https://github.com/apioo/fusio/issues">GitHub</a>.</p>
  </div>
  <div class="mdl-cell mdl-cell--6-col">
    <h5>Basic</h5>
    <ul>
      <li>
        <a href="<?php echo $router->getAbsolutePath(\App\Website\Bootstrap::class); ?>">Getting started</a>
        <br>
        <small>Quick introduction tutorial to get started</small>
      </li>
      <li>
        <a href="http://fusio.readthedocs.org/">Manual</a>
        <br>
        <small>Link to the official manual</small>
      </li>
      <li>
        <a href="<?php echo $router->getAbsolutePath(\App\Website\Documentation\Recipes::class); ?>">Recipes</a>
        <br>
        <small>Short tutorials to quickly explain a specific use case</small>
      </li>
      <li>
        <a href="<?php echo $router->getAbsolutePath(\App\Website\Documentation\Videos::class); ?>">Videos</a>
        <br>
        <small>Videos which demonstrate a certain topic</small>
      </li>
      <li>
        <a href="<?php echo $router->getAbsolutePath(\App\Website\Demo::class); ?>">Demo</a>
        <br>
        <small>Fusio demo instance to test and experiment</small>
      </li>
    </ul>
  </div>
  <div class="mdl-cell mdl-cell--6-col">
    <h5>Community</h5>
    <ul>
      <li>
        <a href="https://chriskapp.medium.com/fusio-2-0-an-php-based-api-management-platform-f047e3f554e1">Fusio 2.0: An PHP based API management platform</a>
        <br>
        <small>Medium introduction post to Fusio 2.0.</small>
      </li>
      <li>
        <a href="https://github.com/apioo/fusio-sample-cms">Fusio headless CMS sample app</a>
        <br>
        <small>Sample app which shows how to structure a complex API using Fusio.</small>
      </li>
      <li>
        <a href="https://docs.google.com/document/d/1RSu7MRLSwfYYH5E9bqxiJ930QgocDDCHx2PLV3-R_pY/edit?usp=sharing">Fusio Tutorial eBook</a>
        <br>
        <small>eBook which covers all basic aspects of Fusio to help you get started</small>
      </li>
      <li>
        <a href="https://medium.com/@christoph.kappestein/simple-php-based-api-management-platform-f88e24dad756">Simple PHP based API Management Platform</a>
        <br>
        <small>Medium introduction blog post to build your first API</small>
      </li>
    </ul>
  </div>
  <div class="mdl-cell mdl-cell--6-col">
    <h5>Technical</h5>
    <ul>
      <li>
        <a href="https://demo.fusio-project.org/apps/internal/#!/page/about">Backend API</a>
        <br>
        <small>Documentation of the internal backend REST API</small>
      </li>
      <li>
        <a href="<?php echo $router->getAbsolutePath(\App\Website\Documentation\Worker::class); ?>">Worker API</a>
        <br>
        <small>Documentation of the worker API</small>
      </li>
      <li>
        <a href="<?php echo $router->getAbsolutePath(\App\Website\Documentation\PHP::class); ?>">PHP API</a>
        <br>
        <small>API of the PHP file and sandbox action</small>
      </li>
    </ul>
  </div>
  <div class="mdl-cell mdl-cell--6-col">
    <h5>Support</h5>
    <ul>
      <li>
        <a href="https://groups.google.com/forum/#!forum/fusio">Forum</a>
        <br>
        <small>Place to share any kind of feedback or questions</small>
      </li>
      <li>
        <a href="https://github.com/apioo/fusio/issues">GitHub</a>
        <br>
        <small>GitHub project to report issues</small>
      </li>
    </ul>
  </div>
</div>

<div class="fusio-content fusio-edit mdl-grid">
  <div class="mdl-cell mdl-cell--12-col">
    <a href="https://github.com/apioo/fusio-website/blob/main/src/Website/resource/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="material-icons">edit</i> Edit this page</a>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
