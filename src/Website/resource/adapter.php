<?php include(__DIR__ . '/inc/header.php'); ?>

<!--
Hey developer, if you want to add an adapter you only need to set the keyword "fusio-adapter" in your composer.json file
see also https://github.com/apioo/fusio-adapter-sql/blob/master/composer.json as example. Our fetcher will then
automatically find your repository and add it to this list.
-->

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Adapter</h4>
    <p>Through an Adapter it is possible to connect to different data sources or
    extend specific capabilities of the system. The following page lists 
    available adapters. You can install an adapter through composer and then 
    register the adapter class at the system:</p>
    <pre><code class="bash">composer require fusio/adapter-mongodb
php bin/fusio system:register "Fusio\Adapter\Mongodb\Adapter"</code></pre>
    <p>This page lists all adapters which have the keyword <code>fusio-adapter</code> 
    in their composer json file.</p>
  </div>
</div>

<div class="fusio-content mdl-grid">
  <?php foreach($entry as $row): ?>
  <div class="mdl-cell mdl-cell--4-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card <?php echo str_replace('/', '_', $row['name']); ?>">
      <div class="mdl-card__title"><?php echo $row['name']; ?></div>
      <div class="mdl-card__supporting-text"><?php echo $row['description']; ?></div>
      <div class="mdl-card__actions mdl-card--border">
        <a href="<?php echo $row['url']; ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Packagist</a>
        <a href="<?php echo $row['repository']; ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">GitHub</a>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>

<div class="fusio-content fusio-edit mdl-grid">
  <div class="mdl-cell mdl-cell--12-col">
    <a href="https://github.com/apioo/fusio-website/blob/main/src/Website/resource/<?php echo pathinfo(__FILE__, PATHINFO_BASENAME); ?>"><i class="material-icons">edit</i> Edit this page</a>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>
