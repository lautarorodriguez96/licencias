<section id="user-login" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">

  <h1 class="text-center">Ingresar al sistema</h1>

  <div class="user-login-control">
    <?php print drupal_render($form['name']); ?>
  </div>
  <div class="user-login-control">
    <?php print drupal_render($form['pass']); ?>
  </div>

  <?php
    print drupal_render($form['form_build_id']);
    print drupal_render($form['form_id']);
  ?>

  <div class="center-block text-center login-btn">
    <?php print drupal_render($form['actions']); ?>
  </div>

  <hr />

  <div class="user-login-links text-center">
    <div class="password-link">
      <a href="/user/password">Forget your password?</a>
    </div>
    <div class="register-link">
      <a href="/user/register">Create an account</a>
    </div>
  </div>

</section>
