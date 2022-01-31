<?php include(__DIR__ . '/inc/header.php'); ?>

<form method="post">
<div class="fusio-block mdl-grid mdl-shadow--2dp">
  <div class="mdl-cell mdl-cell--12-col">
    <h4>Contact</h4>
    <?php if(isset($error)): ?>
      <p class="mdl-color--accent" style="padding:8px;"><?php echo $error; ?></p>
    <?php endif; ?>

    <?php if(isset($success)): ?>
      <p><b>Thanks for your request, we will answer your request as soon as possible.</b></p>
    <?php endif; ?>

    <p>If you have ideas, questions or suggestions you can use this form to contact us. 
    You can also use the <a href="https://groups.google.com/forum/#!forum/fusio">forum</a> or 
    <a href="https://github.com/apioo/fusio/issues">issue</a> tracker to provide
    public feedback. Please provide an email so we can get in contact with you.</p>

    <div class="mdl-cell mdl-cell--12-col">
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="email" id="email" name="email">
        <label class="mdl-textfield__label" for="email">Your email</label>
        <span class="mdl-textfield__error">Please provide a valid email i.e. foo@bar.com</span>
      </div>
    </div>

    <div class="mdl-cell mdl-cell--12-col">
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <textarea class="mdl-textfield__input" type="text" rows="5" id="message" name="message"></textarea>
        <label class="mdl-textfield__label" for="message">Your message</label>
      </div>
    </div>

    <div class="mdl-cell mdl-cell--12-col">
      <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="ack">
        <input type="checkbox" name="ack" id="ack" class="mdl-checkbox__input" value="1">
        <span class="mdl-checkbox__label">I consent that this contact form uses
        the provided data to send directly an email to a specific address. This
        means we dont store the provided data in a database.
        </span>
      </label>
    </div>

    <div class="mdl-cell mdl-cell--12-col">
      <br>
      <br>
      <div class="g-recaptcha" data-sitekey="6LcoZQoTAAAAAPE6fWloKOQieeggPS61L-nJBVz4"></div>
      <br>
    </div>

    <div class="mdl-cell mdl-cell--12-col">
      <button type="submit" class="mdl-button mdl-js-button mdl-button--raised">Submit</button>
    </div>
  </div>
</div>
</form>

<script src="//www.google.com/recaptcha/api.js"></script>

<?php include(__DIR__ . '/inc/footer.php'); ?>
