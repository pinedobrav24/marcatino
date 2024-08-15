<?php
$localprincipal = [];
?>
<footer class="footer">

    <div class="contenedor contenido-footer">
        <div class="logo">
            <a href="<?php echo site_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo vertical 3.png" alt="logotipo">
            </a>
            <p><?php bloginfo('description'); ?></p>
            <nav>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'redes-sociales', //menu
                        'menu_class' => 'redes-sociales', //clase
                        'container' => 'ul', //tipo de contenedor
                        'depth' => 2, //niveles
                    )
                );
                ?>
            </nav>

        </div>
        <div class="contacto">
            <?php
            $pagcontacto = get_page_by_title('Contactenos');
            $sede = get_field('principal', $pagcontacto->ID);
            $direccion = $sede['direccion'];
            $telefono = $sede['telefono__celular'];
            $email = $sede['e-mail'];

            ?>
            <h2 class="text-primary tex-center">Contáctanos</h2>
            <ul>
                <li>
                    <i class="fa-solid fa-location-dot"></i>
                    <p><?php echo esc_html($direccion); ?></p>
                </li>
                <li>
                    <i class="fa-solid fa-phone-volume"></i>
                    <p><?php echo esc_html($telefono); ?></p>
                </li>
                <li>
                    <i class="fa-solid fa-envelope"></i>
                    <p><?php echo esc_html($email); ?></p>
                </li>
            </ul>
        </div>

    </div>
    <div class="copyright contenedor text-center">
        <hr>
        <p>Todos los derechos reservados. <?php echo get_bloginfo('name') . " " . date('Y') ?></p>
    </div>


</footer>
<?php wp_footer(); ?>
</body>

</html>