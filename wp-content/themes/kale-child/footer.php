<?php
/**
* The template for displaying the footer
*
* @package kale
*/
?>

        <?php get_sidebar('footer'); ?>
        
        <!-- Footer -->
        <div class="footer">
            
            <?php if ( is_active_sidebar( 'footer-row-3-center' ) ) { ?>
            <div class="footer-row-3-center"><?php dynamic_sidebar( 'footer-row-3-center' ); ?>
            <?php } ?>

            <div class ="row footer-copyright">
              <div class="col-sm-6"></div>
              <div class="col-sm-6">
                <div class="col-sm-12 pull-right">© 2017 HARINA BAKERY. ALL RIGHTS RESERVED</div>
                <div class="col-sm-12 pull-right">SITE BY SUZI KIM AND STEVEN LIN</div>
              </div>
            </div>
            
        </div>
        <!-- /Footer -->
        
    </div><!-- /Container -->
</div><!-- /Main Wrapper -->

<?php wp_footer(); ?>
</body>
</html>
