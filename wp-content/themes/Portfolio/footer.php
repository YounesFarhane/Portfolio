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

<footer class="footer" id="footer">
            <div class="row">
                <div class="footer__element">
                    <div class="footer__element--name ">
                        <h2 class="heading-secondary">Younes Farhane</h2>
                        <p class="paragraph u-center-text">Web developer Front End, autodidact, tech writer and problem solver. I love building communities.</p>
                    </div>
                    <div class="footer__social">
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="footer__bottom">
            <div class="row">
            <div class="footer__copyright">
                    <p class="copyright">&copy; <?php echo date("Y"); ?> Younes Farhane. All Rights Reserved.</p>
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