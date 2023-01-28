<?php

include config('view.paths.partials') . '/header.php';

?>

<main>
  <div class="pure-g">
    <form action="/cadastro" method="POST" class="pure-form pure-form-stacked pure-u-1-3" novalidate>
      <input type="hidden" name="_token" id="csrf-token" value="<?php echo csrf_token() ?>" />
      <fieldset>
        <legend>Cadastro</legend>
        <label for="stacked-name">Nome</label>
        <?php if ($errors->has("name")) : ?>
          <input type="text" class="input-error" name="name" id="stacked-name" placeholder="Insira seu nome" value="<?php echo old('name') ?? '' ?>" />
          <span class="pure-form-message error"><?php echo $errors->first("name"); ?></span>
        <?php else : ?>
          <input type="text" name="name" id="stacked-name" placeholder="Insira seu nome" value="<?php echo old('name') ?? '' ?>" />
        <?php endif; ?>
        <label for="stacked-email">Email</label>
        <?php if ($errors->has("email")) : ?>
          <input type="text" class="input-error" name="email" id="stacked-email" placeholder="Insira seu email" value="<?php echo old('email') ?? '' ?>" />
          <span class="pure-form-message error"><?php echo $errors->first("email"); ?></span>
        <?php else : ?>
          <input type="text" name="email" id="stacked-email" placeholder="Insira seu email" value="<?php echo old('email') ?? '' ?>" />
        <?php endif; ?>
        <label for="stacked-password">Senha</label>
        <?php if ($errors->has("password")) : ?>
          <input type="password" class="input-error" name="password" id="stacked-password" placeholder="Insira sua senha" />
          <span class="pure-form-message error"><?php echo $errors->first("password"); ?></span>
        <?php else : ?>
          <input type="password" name="password" id="stacked-password" placeholder="Insira sua senha" />
        <?php endif; ?>
        <label for="stacked-password_confirmation">Confirmação de senha</label>
        <?php if ($errors->has("password_confirmation")) : ?>
          <input type="password" class="input-error" name="password_confirmation" id="stacked-password_confirmation" placeholder="Confirme sua senha" />
          <span class="pure-form-message error"><?php echo $errors->first("password_confirmation"); ?></span>
        <?php else : ?>
          <input type="password" name="password_confirmation" id="stacked-password_confirmation" placeholder="Confirme sua senha" />
        <?php endif; ?>
        </label>
        <button type="submit" class="pure-button pure-button-primary">Enviar</button>
        <br>
        <br>
        <span class="pure-form-message">Já possui cadastro? <a href="/login">Faça login.</a></span>
      </fieldset>
    </form>
  </div>
</main>


<?php

include config('view.paths.partials') . '/footer.php';

?>
