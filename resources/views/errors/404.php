<?php

include config('view.paths.partials') . '/header.php';

?>

<main class="container">
  <section>
    <p><strong>404</strong>: página não encontrada.</p>
    <p>A página <strong><?php echo parse_url(url()->current(), PHP_URL_PATH); ?></strong> não existe.</p>
    </form>
  </section>
</main>

<?php

include config('view.paths.partials') . '/footer.php';

?>
