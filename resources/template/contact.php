<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="fusio-headline">
  <div class="container">
    <div class="row">
      <div class="col p-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Contact</h1>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 pt-4 mb-4 pb-4">
  <div class="row">
    <div class="col">
        <?php if(isset($error)): ?>
          <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php elseif(isset($success)): ?>
          <div class="alert alert-success"><b>Thanks for your request, we will answer your request as soon as possible.</b></div>
          <script>
            gtag("event", "generate_lead");
          </script>
        <?php endif; ?>

      <p>Please use this form for business inquiries. If you are interested in consulting regarding Fusio, take a look
      at our <a href="https://github.com/sponsors/chriskapp/sponsorships?sponsor=chriskapp&tier_id=335022&preview=false">GitHub sponsor</a>
      consulting tier. Note this is not a support form, please use the following public resources in case of issues
      regarding Fusio:</p>

      <ul>
        <li><a href="https://docs.fusio-project.org/">Documentation</a></li>
        <li><a href="https://github.com/apioo/fusio/issues">Issue</a></li>
        <li><a href="https://discord.gg/eMrMgwsc6e">Discord</a></li>
        <li><a href="https://www.youtube.com/c/FusioAPI">Youtube</a></li>
      </ul>

      <hr>

      <form method="post" id="contactForm">
        <div class="mb-3">
          <label for="email" class="form-label fw-bold">Your email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="user@acme.com" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label fw-bold">Your message</label>
          <textarea id="message" name="message" rows="5" class="form-control" placeholder="My message" required></textarea>
        </div>
        <button class="g-recaptcha btn btn-primary" data-sitekey="<?php echo $recaptcha_key; ?>" data-callback="onSubmit" data-action="submit">Submit</button>
      </form>
    </div>
  </div>
</div>

<script>
function onSubmit(token) {
  document.getElementById("contactForm").submit();
}
</script>

<?php include(__DIR__ . '/inc/footer.php'); ?>
