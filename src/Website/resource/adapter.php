<?php include(__DIR__ . '/inc/header.php'); ?>

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

<!--
<div class="fusio-content mdl-grid">
  <div class="mdl-cell mdl-cell--12-col">
    <div class="fusio-card-app mdl-shadow--2dp mdl-card">
      <div class="mdl-card__title">Capabilities</div>
      <div class="mdl-card__supporting-text">
        <dl>
          <dt><span class="mdl-chip"><span class="mdl-chip__text">actionClass</span></span></dt>
          <dd>Provides a custom action class which processes a request and produces a response. 
          This is used in most cases if the basic actions can not solve the problem.</dd>
          <dt><span class="mdl-chip"><span class="mdl-chip__text">connectionClass</span></span></dt>
          <dd>Provides a custom connection class which is mostly used to connect to remote systems
          i.e. a different NoSQL Database or Message Queue.</dd>
          <dt><span class="mdl-chip"><span class="mdl-chip__text">routes</span></span></dt>
          <dd>Provides routes which are inserted into the system. On installation it is possible
          to specify a base path under which these routes are inserted.</dd>
          <dt><span class="mdl-chip"><span class="mdl-chip__text">action</span></span></dt>
          <dd>Provides actions which are inserted into the system.</dd>
          <dt><span class="mdl-chip"><span class="mdl-chip__text">schema</span></span></dt>
          <dd>Provides JSON Schemas which are inserted into the system.</dd>
          <dt><span class="mdl-chip"><span class="mdl-chip__text">database</span></span></dt>
          <dd>Contains database specifications. On installation you can choose the connection 
          where theses schemas should be created.</dd>
          <dt><span class="mdl-chip"><span class="mdl-chip__text">connection</span></span></dt>
          <dd>Provides connections which are inserted into the system.</dd>
        </dl>
      </div>
    </div>
  </div>
</div>
-->

<?php include(__DIR__ . '/inc/footer.php'); ?>
