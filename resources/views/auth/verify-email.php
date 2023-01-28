<?php

include config('view.paths.partials') . '/header.php';

?>

<main class="container">
  <?php if (session('message-success')) : ?>
    <div class="alert">
      <div class="alert-success">
        <?php echo session('message-success'); ?>
      </div>
    </div>
  <?php endif; ?>
  <section>
    <p>Por favor, verifique sua conta através do email enviado para <strong><?php echo $email; ?></strong>.</p>
    <p>Para reenviar o email, <a id="link-resend-email" href='#'>clique aqui</a>.</p>
    <form id="form-resend-email" action="/email/verification-notification" method="POST">
      <input type="hidden" name="_token" id="csrf-token" value="<?php echo csrf_token() ?>" />
    </form>
  </section>
</main>
<script>
  const resendLink = document.getElementById("link-resend-email");
  const resendForm = document.getElementById("form-resend-email");

  resendLink.addEventListener("click", function(event) {
    event.preventDefault();
    resendForm.submit();
  });
</script>

<?php

include config('view.paths.partials') . '/footer.php';

?>
