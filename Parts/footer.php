        <footer>
            <h2>| Lire les CONDITIONS D'UTILISATIONS</h2>
            <div>
                <?php 
                    wp_nav_menu(array(
                        'theme_location'=>'footer',
                        'container' => 'ul', // afin d'éviter d'avoir une div autour 
                        'menu_class' => 'moles_header_navigation', // ma classe personnalisée 
                    )); 
                ?>
                <div>
                    <p class="copyright">©Atelier Des Môles</p>
                    <p class="reserve">Tous droits réservés 2022</p>
                </div>
            </div>
        </footer>
    </body>
</html>