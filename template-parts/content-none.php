<section class="no-results not-found">
  <h1 class="page-title">Ничего не найдено</h1>
  <div class="page-content">
    <?php
    if (is_search()) :
    ?>
      <p>Извините, но ничего не соответствует вашим поисковым запросам. Попробуйте еще раз с другими ключевыми словами.</p>
    <?php
      get_search_form();
    else :
    ?>
      <p>Кажется, мы не можем найти то, что вы ищете. Возможно, поиск поможет.</p>
    <?php
      get_search_form();

    endif;
    ?>
  </div>
</section>