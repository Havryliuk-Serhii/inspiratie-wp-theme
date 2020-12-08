    </main>
    <!-- Footer section-->
    <footer class="site-footer">
        <div class="footer-logo">
            <?php   if ( ! has_custom_logo() ) { 

                    if ( is_front_page() && is_home() ) : ?>

                        <h2 class="navbar-brand"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" ><?php bloginfo( 'name' ); ?></a></h2>

                    <?php else : ?>
                            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" ><?php bloginfo( 'name' ); ?></a>
                    <?php endif; 
                } else {
                            the_custom_logo();
                        }
            ?>
        </div>
        <div class="copyright">
            Copyright &copy; <script>document.write(new Date().getFullYear());</script> Inspirate by <a href="<?php echo home_url(); ?>">Stephanie</a>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>