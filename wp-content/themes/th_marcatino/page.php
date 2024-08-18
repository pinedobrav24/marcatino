<?php
get_header();
get_template_part('template-parts/cabecera');
?>

<main class="contenedor seccion">

    <?php
    the_content();
    ?>

</main>

<?php
get_footer();
?>