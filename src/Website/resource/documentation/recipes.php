<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-block mdl-grid mdl-shadow--2dp fusio-api">
  <div class="mdl-cell mdl-cell--3-col mdl-color--grey-100">
    <ul class="fusio-api-nav">
      <?php foreach ($recipes as $type => $chapters): ?>
      <li>
        <a><?php echo ucfirst($type); ?></a>
        <ul>
          <?php foreach ($chapters as $key => $title): ?>
          <li><a href="<?php echo $url . 'documentation/recipes/' . $key; ?>"><?php echo $title; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div class="mdl-cell mdl-cell--9-col">
    <?php if (empty($chapter)): ?>
      <h4>Recipes</h4>
      <p>Please select a specific recipe on the left navigation. Every recipe 
      has a simple structure to simply explain how to accomplish a specific 
      task. In case you have a use case which you want to share or which is not 
      covered here please let us know.</p>

      <h5>Routes</h5>
      <p>Contains the YAML code to declare a specific route for this recipe. 
      You need to insert the specific code snippet into the file 
      <code>resources/routes.yaml</code>.</p>

      <h5>Connection</h5>
      <p>Contains the YAML code to create the fitting connection which is used 
      in the recipe. You need to insert the specific code snippet into the file
      <code>resources/connections.yaml</code>.</p>

      <h5>Action</h5>
      <p>Contains the PHP action which shows how to implement the specific use 
      case. The action file must be placed inside the <code>src/</code> 
      directory.</p>
    <?php else: ?>
      <h4><a href="<?php echo $url . 'documentation/recipes'; ?>">Recipes</a> / <?php echo $subType; ?> / <?php echo $chapter['title']; ?></h4>
      <p><?php echo $chapter['description']; ?></p>
  
      <?php if (isset($chapter['routes'])): ?>
      <h5>Routes</h5>
      <small><code>resources/routes.yaml</code></small>
      <pre><code class="hljs yaml"><?php echo htmlspecialchars($chapter['routes']); ?></code></pre>
      <?php endif; ?>
  
      <?php if (isset($chapter['connection'])): ?>
      <h5>Connection</h5>
      <small><code>resources/connections.yaml</code></small>
      <pre><code class="hljs yaml"><?php echo htmlspecialchars($chapter['connection']); ?></code></pre>
      <?php endif; ?>
  
      <?php if (isset($chapter['action'])): ?>
      <h5>Action</h5>
      <small><code>resources/<?php echo $chapter['actionFile']; ?></code></small>
      <pre><code class="hljs php"><?php echo htmlspecialchars($chapter['action']); ?></code></pre>
      <?php endif; ?>
    <?php endif; ?>
  </div>
</div>

<?php include(__DIR__ . '/../inc/footer.php'); ?>
