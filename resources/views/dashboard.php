<?php

include config('view.paths.partials') . '/header.php';

$greeting = get_greeting();

?>

<header>
  <nav class="pure-menu pure-menu-horizontal">
    <span class="pure-menu-heading"><?php echo ucfirst($greeting) . ", " . $user->name ?></span>
    <ul class="pure-menu-list">
      <li class="pure-menu-item">
        <a class="pure-menu-link" id="link-logout" href="#">
          Sair
        </a>
        <form id="form-logout" action="/logout" method="POST">
          <input type="hidden" name="_token" id="csrf-token" value="<?php echo csrf_token() ?>" />
        </form>
      </li>
    </ul>
  </nav>
</header>

<script>
  const logoutLink = document.getElementById("link-logout");
  const logoutForm = document.getElementById("form-logout");

  logoutLink.addEventListener("click", function(event) {
    event.preventDefault();
    logoutForm.submit();
  });
</script>

<?php

include config('view.paths.partials') . '/footer.php';

?>
