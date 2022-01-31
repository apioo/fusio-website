<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="fusio-block mdl-grid mdl-shadow--2dp fusio-api">
  <div class="mdl-cell mdl-cell--3-col mdl-color--grey-100">
    <ul class="fusio-api-nav">
      <?php foreach ($api as $classKey => $row): ?>
      <?php if ($row['visible']): ?>
      <li>
        <a href="<?php echo $url . 'documentation/' . $name . '/' . $classKey; ?>"><?php echo $classKey; ?></a>
        <ul>
          <?php foreach ($row['methods'] as $methodKey => $row): ?>
          <li><a href="<?php echo $url . 'documentation/' . $name . '/' . $classKey . '/' . $methodKey; ?>"><?php echo $methodKey; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </li>
      <?php endif; ?>
      <?php endforeach; ?>
    </ul>
    <ul class="fusio-api-nav">
      <?php foreach ($api as $classKey => $row): ?>
      <?php if (!$row['visible']): ?>
      <li>
        <a href="<?php echo $url . 'documentation/' . $name . '/' . $classKey; ?>"><?php echo $classKey; ?></a>
        <ul>
          <?php foreach ($row['methods'] as $methodKey => $row): ?>
          <li><a href="<?php echo $url . 'documentation/' . $name . '/' . $classKey . '/' . $methodKey; ?>"><?php echo $methodKey; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </li>
      <?php endif; ?>
      <?php endforeach; ?>
    </ul>
  </div>
  <div class="mdl-cell mdl-cell--9-col">
    <?php if (isset($class)): ?>
    <h4><a href="<?php echo $url . 'documentation/' . $name; ?>">API</a> / <?php echo $className; ?></h4>
    <?php if (isset($class['description'])): ?>
    <p><?php echo $class['description']; ?></p>
    <?php endif; ?>

    <h5>Methods</h5>
    <table class="mdl-data-table mdl-js-data-table fusio-api-table">
      <colgroup>
        <col width="150">
        <col width="*">
      </colgroup>
      <thead>
      <tr>
        <th class="mdl-data-table__cell--non-numeric">Name</th>
        <th class="mdl-data-table__cell--non-numeric">Description</th>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($class['methods'] as $methodKey => $row): ?>
      <tr>
        <td class="mdl-data-table__cell--non-numeric"><a href="<?php echo $url . 'documentation/' . $name . '/' . $className . '/' . $methodKey; ?>"><?php echo $methodKey; ?></a></td>
        <td class="mdl-data-table__cell--non-numeric"><?php echo $row['description']; ?></td>
      </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    <?php elseif (isset($method)): ?>
    <h4><a href="<?php echo $url . 'documentation/' . $name; ?>">API</a> / <a href="<?php echo $url . 'documentation/' . $name . '/' . $className; ?>"><?php echo $className; ?></a>.<?php echo $methodName; ?></h4>
    <?php if (isset($method['description'])): ?>
    <p><?php echo $method['description']; ?></p>
    <?php endif; ?>

    <?php if (isset($method['arguments'])): ?>
    <h5>Arguments</h5>
    <table class="mdl-data-table mdl-js-data-table fusio-api-table">
      <colgroup>
        <col width="150">
        <col width="150">
        <col width="*">
      </colgroup>
      <thead>
      <tr>
        <th class="mdl-data-table__cell--non-numeric">Name</th>
        <th class="mdl-data-table__cell--non-numeric">Type</th>
        <th class="mdl-data-table__cell--non-numeric">Description</th>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($method['arguments'] as $argument): ?>
      <tr>
        <td class="mdl-data-table__cell--non-numeric"><?php echo $argument['name']; ?></td>
        <td class="mdl-data-table__cell--non-numeric"><?php echo $argument['type']; ?></td>
        <td class="mdl-data-table__cell--non-numeric"><?php echo isset($argument['description']) ? $argument['description'] : ''; ?></td>
      </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    <?php endif; ?>

    <?php if (isset($method['return'])): ?>
    <h5>Return</h5>
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
      <?php if (isset($method['return'][0])): ?>
      <?php foreach ($method['return'] as $return): ?>
      <tr>
        <?php if (in_array($return['type'], array_keys($api))): ?>
        <td class="mdl-data-table__cell--non-numeric"><a href="<?php echo $url . 'documentation/' . $name . '/' . $return['type']; ?>"><?php echo $return['type']; ?></a></td>
        <?php else: ?>
        <td class="mdl-data-table__cell--non-numeric"><?php echo $return['type']; ?></td>
        <?php endif; ?>
        <td class="mdl-data-table__cell--non-numeric"><?php echo $return['description']; ?></td>
      </tr>
      <?php endforeach; ?>
      <?php else: ?>
      <tr>
        <?php if (in_array($method['return']['type'], array_keys($api))): ?>
        <td class="mdl-data-table__cell--non-numeric"><a href="<?php echo $url . 'documentation/' . $name . '/' . $method['return']['type']; ?>"><?php echo $method['return']['type']; ?></a></td>
        <?php else: ?>
        <td class="mdl-data-table__cell--non-numeric"><?php echo $method['return']['type']; ?></td>
        <?php endif; ?>
        <td class="mdl-data-table__cell--non-numeric"><?php echo isset($method['return']['description']) ? $method['return']['description'] : ''; ?></td>
      </tr>
      <?php endif; ?>
      </tbody>
    </table>
    <?php endif; ?>

    <?php if (isset($method['example'])): ?>
    <h5>Example</h5>
    <pre><code class="hljs javascript"><?php echo $method['example']; ?></code></pre>
    <?php endif; ?>
    <?php else: ?>
    <h4><a href="<?php echo $url . 'documentation/' . $name . ''; ?>">API</a></h4>
    <p>Fusio provides specific variables in every <?php echo strtoupper($name); ?>-Action which can be used to produce
    a response. This API describes all available variables and can be used as a reference to develop new actions.</p>
    <h5>Objects</h5>
    <table class="mdl-data-table mdl-js-data-table fusio-api-table">
      <colgroup>
        <col width="150">
        <col width="*">
      </colgroup>
      <thead>
      <tr>
        <th class="mdl-data-table__cell--non-numeric">Name</th>
        <th class="mdl-data-table__cell--non-numeric">Description</th>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($api as $classKey => $row): ?>
      <?php if ($row['visible']): ?>
      <tr>
        <td class="mdl-data-table__cell--non-numeric"><code><a href="<?php echo $url . 'documentation/' . $name . '/' . $classKey; ?>"><?php echo $classKey; ?></a></code></td>
        <td class="mdl-data-table__cell--non-numeric"><?php echo $row['description']; ?></td>
      </tr>
      <?php endif; ?>
      <?php endforeach; ?>
      </tbody>
    </table>

    <?php endif; ?>
  </div>
</div>

<?php include(__DIR__ . '/../inc/footer.php'); ?>
