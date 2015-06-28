

<div class="clearfix"></div>

    <!-- FOOTER -->
    <div id="footer-wrapper" class="block block-full">
        <div class="block-ct">

            <div class="footer-block-wrapper">
            
                <div class="footer-block new-letter-block">
                    <span class="lb-footer">Newsletter</span>
                    <div class="input-news-letter">
                        <input type="text" name="" value="" placeholder="Email Address">
                        <span class="icon-newsletter"></span>
                    </div>
                </div>

                <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer block widget')) : else : ?>
                <?php endif;?>

            </div>

        </div>
    </div>
    <div id="footer-second-wrapper" class="block block-full">
        <div class="block-ct">
            <div class="info-footer">
<!--                 <p>Doubs Sud Athlétisme Pontarlier</p>
                <p>2 avenue du stade Paul Robbe, 25300 Pontarlier, Christophe CLAYRAC 06 75 07 22 44, dsapontarlier@wanadoo.fr</p>
                <p>Inscriptions et repas Alexandra Qalaj 06 45 94 71 42</p> -->
            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer info widget')) : else : ?>
            <?php endif;?>

            </div>
            <div class="copyright-footer">
                <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer coppy right info widget')) : else : ?>
                <?php endif;?>
            </div>
        </div>
    </div>
    <!-- FOOTER -->


    <?php wp_footer(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/bxslider/jquery.bxslider.min.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.slider-actualites').bxSlider({
                controls : false
            });
            var bxSp = $('.sponsor-slider').bxSlider({
                controls : false,
                auto : true,
                maxSlides: 7,
                mixSlides : 5,
                slideWidth: 90,
                slideMargin: 10,
                pager : false,
            });
            $('#sponsor-next').click(function(event) {
                bxSp.goToNextSlide();
            });
            $('#sponsor-prev').click(function(event) {
                bxSp.goToPrevSlide();
            });

            $('.header-slider-wrapper ul').bxSlider({
                pager : false,
                controls : false,
                auto : true,
            })
        });
    </script>
</body>
</html>