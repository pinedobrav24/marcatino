<footer class="footer">

    <div class="contenedor contenido-footer">
        <hr>

        <div class="contenedor-menu">
            <nav>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-principal', //menu
                        'menu_class' => 'menu-principal', //clase
                        'container' => 'ul', //tipo de contenedor
                        'depth' => 2, //niveles
                    )
                );
                ?>
            </nav>
        </div>

    </div>


</footer>
<?php wp_footer(); ?>
</body>

</html>