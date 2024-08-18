<?php

// configuraciones adicionales

function tm_setup()
{
    //imagen destacada
    add_theme_support('post-thumbnails');

    //titulos para SEO
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'tm_setup');
//agregando menus

function tm_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'marcatino'),
        'menu-top' => __('Menu top', 'marcatino'),
        'redes-sociales' => __('Redes Sociales', 'marcatino')
    ));
}

add_action('init', 'tm_menus');

//agregando archivos (hojas de estilos y js)

function tm_scripts_styles()
{
    //archivos css
    wp_enqueue_style('normalize', get_stylesheet_uri(), array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '6.0.0');


    //archivos js
}

add_action('wp_enqueue_scripts', 'tm_scripts_styles');

// breadcrumb

function custom_breadcrumbs()
{
    // Configuración
    $separator = ' &gt; ';
    $home_title = 'Inicio';

    // Obtener el objeto de la consulta global
    global $post, $wp_query;

    // No mostrar breadcrumbs en la página de inicio
    if (!is_front_page()) {
        echo '<ul class="breadcrumbs">';

        // Link a la página de inicio
        echo '<li><a href="' . get_home_url() . '">' . $home_title . '</a></li>';
        echo '<li class="separator"> ' . $separator . ' </li>';

        if (is_archive() && !is_tax() && !is_category() && !is_tag()) {
            echo '<li>' . post_type_archive_title('', false) . '</li>';
        } else if (is_single()) {
            // Obtenemos la categoría del post
            $category = get_the_category();
            if ($category) {
                $cat_link = get_category_link($category[0]->term_id);
                echo '<li><a href="' . $cat_link . '">' . $category[0]->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
            }
            echo '<li>' . get_the_title() . '</li>';
        } else if (is_category()) {
            echo '<li>' . single_cat_title('', false) . '</li>';
        } else if (is_page()) {
            if ($post->post_parent) {
                $ancestors = array_reverse(get_post_ancestors($post->ID));
                foreach ($ancestors as $ancestor) {
                    echo '<li><a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    echo '<li class="separator"> ' . $separator . ' </li>';
                }
            }
            echo '<li>' . get_the_title() . '</li>';
        } else if (is_tag()) {
            echo '<li>' . single_tag_title('', false) . '</li>';
        } else if (is_day()) {
            echo '<li>' . get_the_date() . '</li>';
        } else if (is_month()) {
            echo '<li>' . get_the_date('F Y') . '</li>';
        } else if (is_year()) {
            echo '<li>' . get_the_date('Y') . '</li>';
        } else if (is_author()) {
            echo '<li>' . get_the_author() . '</li>';
        } else if (get_query_var('paged')) {
            echo '<li>' . __('Page') . ' ' . get_query_var('paged') . '</li>';
        } else if (is_search()) {
            echo '<li>Resultados de búsqueda para "' . get_search_query() . '"</li>';
        } else if (is_404()) {
            echo '<li>404 - Página no encontrada</li>';
        }

        echo '</ul>';
    }
}

function tm_ubicacion_shortcode()
{
?>
    <div class="contenido-contacto contenedor seccion">
        <div class="info-local">
            <?php
            $pagcontacto = get_page_by_title('Contactenos');
            $sede = get_field('principal', $pagcontacto->ID);
            $direccionp = $sede['direccion'];
            $telefonop = $sede['telefono__celular'];
            $emailp = $sede['e-mail'];
            $ubicacionp = $sede['ubicacion_mapa2'];
            ?>
            <ul class="datos">
                <li class="dato">
                    <div class="icono">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="dato-texto">
                        <h4>Dirección</h4>
                        <p><?php echo esc_html($direccionp); ?></p>
                    </div>
                </li>
                <li class="dato">
                    <div class="icono">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <div class="dato-texto">
                        <h4>Teléfono</h4>
                        <p><?php echo esc_html($telefonop); ?></p>
                    </div>
                </li>
                <li class="dato">
                    <div class="icono">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="dato-texto">
                        <h4>E-mail</h4>
                        <p><?php echo esc_html($emailp); ?></p>
                    </div>

                </li>
            </ul>
        </div>
        <div class="form-contacto">
            <?php echo do_shortcode('[contact-form-7 id="fe50d86" title="Contact form 1"]'); ?>
        </div>
    </div>
    <div class="mapa">
        <h2 class="text-primary text-center ">Encuentranos <span>Aquí</span>
            <h2>
                <?php echo ($ubicacionp); ?>
    </div>
<?php
}
add_shortcode('tm_data_contacto', 'tm_ubicacion_shortcode');
