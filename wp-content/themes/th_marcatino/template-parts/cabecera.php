<div class="cabecera text-center">
    <?php
    while (have_posts()): the_post();
        the_title('<h1 class="text-primary">', '</h1>');

        if (function_exists('custom_breadcrumbs')) custom_breadcrumbs();
    endwhile;
    ?>
</div>