<?php

include config('view.paths.partials') . '/header.php';

?>

<main>
  <div class="pure-g">
    <form action="/login" method="POST" class="pure-form pure-form-stacked pure-u-1-3" novalidate>
      <input type="hidden" name="_token" id="csrf-token" value="<?php echo csrf_token() ?>" />
      <fieldset>
        <legend>Login</legend>
        <label for="stacked-email">Email</label>
        <?php if ($errors->has("email")) : ?>
          <input type="text" class="input-error" name="email" id="stacked-email" placeholder="Insira seu email" value="<?php echo old('email') ?? '' ?>" />
          <span class="pure-form-message error"><?php echo $errors->first("email"); ?></span>
        <?php else : ?>
          <input type="text" name="email" id="stacked-email" placeholder="Insira seu email" value="<?php echo old('email') ?? '' ?>" />
        <?php endif; ?>
        <label for="stacked-password">Senha</label>
        <?php if ($errors->has("password")) : ?>
          <input type="password" class="input-error" name="password" id="stacked-password" placeholder="Insira sua senha" value="<?php echo old('password') ?? '' ?>" />
          <span class="pure-form-message error"><?php echo $errors->first("password"); ?></span>
        <?php else : ?>
          <input type="password" name="password" id="stacked-password" placeholder="Insira sua senha" value="<?php echo old('password') ?? '' ?>" />
        <?php endif; ?>
        <label for="stacked-remember-me" class="pure-checkbox">
          <input type="checkbox" name="remember_me" id="stacked-remember-me" value="1" /> Lembrar de mim
        </label>
        <button type="submit" class="pure-button pure-button-primary">Login</button>
        <br>
        <br>
        <span class="pure-form-message">Não possui cadastro? <a href="/cadastro">Cadastre-se.</a></span>
      </fieldset>
    </form>
  </div>
</main>


<?php

include config('view.paths.partials') . '/footer.php';

?>
