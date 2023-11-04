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
            gtag('contact', new Date());
          </script>
        <?php endif; ?>

      <p>Please use this form to contact us. You can also take a look at our <a href="https://docs.fusio-project.org/">documentation</a>
        website or use the <a href="https://groups.google.com/forum/#!forum/fusio">forum</a> or
        <a href="https://github.com/apioo/fusio/issues">issue</a> tracker to solve your issue. Please provide an email
        so that we can get in contact with you.</p>

      <form method="post">
        <div class="mb-3">
          <label for="email" class="form-label fw-bold">Your email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="user@acme.com" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label fw-bold">Your message</label>
          <textarea id="message" name="message" rows="5" class="form-control" placeholder="My message" required></textarea>
        </div>
        <div class="mb-4 mt-4">
          <div class="g-recaptcha" data-sitekey="6LcO6UweAAAAAI1TE-gLrEZ5tH8sa-fmgdL_o9fc"></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<script src="//www.google.com/recaptcha/api.js"></script>

<?php include(__DIR__ . '/inc/footer.php'); ?>
