<?php
   /**
    * The template for displaying the footer
    *
    * Contains the closing of the #content div and all content after.
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package WordPress
    * @subpackage TMPO
    * @since 1.0
    * @version 1.2
    */
?>

<footer class="footer section" id="footer">
            <div class="row">
                <div class="footer__element">
                    <div class="footer__element--name ">
                        <h2 class="heading-secondary"><?php the_field('title_footer' , 'options'); ?></h2>
                        <p class="paragraph u-center-text"><?php the_field('content_footer' , 'options') ;?></p>
                    </div>
                    <div class="footer__social">
                        <a href="<?php the_field('link_social_media', 'options'); ?>"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="footer__bottom section">
            <div class="row">
            <div class="footer__copyright">
                    <p class="copyright">&copy; <?php echo date("Y"); ?> <?php the_field('content_copyright_footer' , 'options') ;?></p>
                </div>
            </div>
        </footer>
       
        <div class='scrolltop'>
    <div class='scroll icon'><i class="fas fa-long-arrow-alt-up"></i>
</div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>