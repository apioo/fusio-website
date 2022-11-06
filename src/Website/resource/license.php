<?php include(__DIR__ . '/inc/header.php'); ?>

<div style="background-image:url('<?php echo $base; ?>/img/intro.jpg');background-size:cover">
  <div class="container">
    <div class="row">
      <div class="col p-lg-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">License</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <p>Fusio is an open source project which you can use freely also for commercial projects under the terms of the
      <a href="https://github.com/apioo/fusio/blob/master/LICENSE">AGPLv3</a>. If your company is not able to use the
      AGPLv3 license we provide a dual license for a small fee which basically allows you to keep all source code closed.
      With this license model we try to generate a small revenue stream to build a sustainable open source project with
      a long term relationship to our users.</p>
    </div>
  </div>
</div>

<div class="bg-light mt-4 pt-4 mb-4 pb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-lg-4 text-center">
      <div class="col-md"></div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Freethinker</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Free</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Use Fusio under the <a href="https://github.com/apioo/fusio/blob/master/LICENSE">AGPLv3</a> license</li>
            </ul>
            <a href="https://github.com/sponsors/chriskapp" class="w-100 btn btn-lg btn-primary">Donate</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Foresight</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$10<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Keep source code closed</li>
            </ul>
            <a href="<?php echo $router->getAbsolutePath(\App\Website\Contact::class); ?>" class="w-100 btn btn-lg btn-primary">Contact</a>
          </div>
        </div>
      </div>
      <div class="col-md"></div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
      <h4>AGPLv3</h4>
      <p>If you are not familiar with the <a href="https://tldrlegal.com/license/gnu-affero-general-public-license-v3-(agpl-3.0)">AGPLv3</a>
        license we got you covered. Basically it means, if you make modifications to the source code, then you need to
        publish those changes also as open source under the AGPLv3 license, because of this it is a copyleft license. In
        the case of Fusio configuring an action at the backend is _not_ a modification to the source code, it is only a configuration,
        so you don`t need to publish such actions. A modification is if you actually create a PHP source file i.e. at the src/ folder.
        In general if you need to integrate a specific service we recommend to create an adapter as open source project
        so that you can still use the AGPLv3 version, this benefits you and our complete community.</p>
      <p>With this license choice we are following the footsteps of great projects like Wordpress or Nextcloud. Like Wordpress
        enables every human to be able to publish content on the web, we want to enable everybody to build high quality
        APIs, which makes the digitalization of the world possible. If you have any further questions please use our
        <a href="<?php echo $router->getAbsolutePath(\App\Website\Contact::class); ?>">contact</a> page.</p>
    </div>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
