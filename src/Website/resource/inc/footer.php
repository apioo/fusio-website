  </div>
  <br>
  <br>
  <footer class="mdl-mega-footer">
    <div class="mdl-mega-footer--bottom-section">
      <div class="mdl-logo mdl-color-text--grey-500">Fusio is made in Düsseldorf</div>
      <ul class="mdl-mega-footer--link-list">
        <li><a href="<?php echo $router->getAbsolutePath('Fusio\Website\Application\Imprint::doIndex'); ?>">Imprint</a></li>
        <li><a href="<?php echo $router->getAbsolutePath('Fusio\Website\Application\Contact::doIndex'); ?>">Contact</a></li>
        <li><a href="https://www.youtube.com/channel/UC64ltsPc27t_UjLjLI6y-Cg">Youtube</a></li>
        <li><a href="https://twitter.com/FusioAPI">Twitter</a></li>
        <li><a href="https://github.com/apioo/fusio">GitHub</a></li>
      </ul>
    </div>
  </footer>
  <div class="fusio-outro"></div>
</main>

<script src="<?php echo $base; ?>/js/material.min.js"></script>
<script src="<?php echo $base; ?>/js/dialog-polyfill.js"></script>

<script src="<?php echo $base; ?>/js/highlight.min.js"></script>
<script src="<?php echo $base; ?>/js/slick.min.js"></script>
<script src="<?php echo $base; ?>/js/yaml.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

  </body>
</html>
