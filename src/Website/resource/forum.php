<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Forum</h4>
    <iframe id="forum_embed"
      src="javascript:void(0)"
      scrolling="no"
      frameborder="0"
      width="900"
      height="1200">
    </iframe>
    <script type="text/javascript">
      document.getElementById('forum_embed').src =
         'https://groups.google.com/forum/embed/?place=forum/fusio'
         + '&showsearch=true&showpopout=true&showtabs=false'
         + '&parenturl=' + encodeURIComponent(window.location.href);
    </script>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>




