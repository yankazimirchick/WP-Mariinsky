<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mariinsky
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer"  style="background-color:#e1e1e1;padding: 50px;">



        <div class="container">




            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="site-branding" >

                        <?php
                        $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
                        echo '<img style="filter: invert(1)" src="'.$custom_logo__url[0].'" alt="альтернативный текст">';


                        if ( is_front_page() && is_home() ) :
                            ?>

                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php
                        else :
                            ?>

                        <?php
                        endif;
                        $mariinsky_description = get_bloginfo( 'description', 'display' );
                        if ( $mariinsky_description || is_customize_preview() ) :
                            ?>
                            <p class="site-description"><?php echo $mariinsky_description; /* WPCS: xss ok. */ ?></p>
                        <?php endif; ?>
                    </div><!-- .site-branding -->
                    <div class="site-info">
                        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mariinsky' ) ); ?>">
                            <?php
                            /* translators: %s: CMS name, i.e. WordPress. */
                            printf( esc_html__( 'Разработано на %s', 'mariinsky' ), 'WordPress' );
                            ?>
                        </a>
                        <span class="sep"> | <br></span>
                        <?php
                        /* translators: 1: Theme name, 2: Theme author. */
                        printf( esc_html__( ' %2$s', 'mariinsky hotel' ), 'mariinsky_hotel', '<a href="https://vk.com/id213467405">Разработка сайта</a>' );
                        ?>
                    </div><!-- .site-info -->
                    <a  href="https://www.instagram.com/hotel_mariinskiy/"> <i class="fa fa-instagram" aria-hidden="true"></i>hotel_mariinskiy/  </a>







                </div>

                <div class="col-md-4 col-sm-6 col-xs-6 footer-bottom">
                    <h4>Советуем посетить:</h4>
                    <p>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        LA PIAZZA<br>
                        <a href="
https://www.google.ru/maps/place/53%C2%B007'53.6%22N+26%C2%B001'03.0%22E/@53.131543,26.0169538,19z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d53.131543!4d26.017501">г. Барановичи , пл. Ленина ,1</a>
                        <br>Тел.:<a href="tel:+375163612121">+375 (163) 61-21-21</a>
                    </p>

                    <p>
                        <i class="fa fa-map-marker" aria-hidden="true"></i> DOLCHE VITA <br>
                        <a href="https://www.google.ru/maps/place/53%C2%B007'58.1%22N+26%C2%B001'07.3%22E/@53.132802,26.0181358,19z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d53.132802!4d26.018683">г. Барановичи , пл. Ленина ,1</a>
                        <br>Тел.:<a href="tel:+375163617272">+375 (163) 61-72-72</a>
                    </p>


                    <p>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>

                        GRAND BUFFET <br>
                        <a href="https://www.google.ru/maps/place/53%C2%B007'58.1%22N+26%C2%B001'07.3%22E/@53.132802,26.0181358,19z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d53.132802!4d26.018683">г. Барановичи , пл. Ленина ,2</a>
                        <br>Тел.:<a href="tel:+375163413081">+375 (163) 41-30-81</a>
                    </p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 footer-bottom">

                    <h4>Контакты:</h4><p>

                        <i class="fa fa-map-marker" aria-hidden="true"></i> MARIINSKY HOTEL<br> 225415, Брестская область<br>г. Барановичи<br> ул. Гагарина-29
                        <br>ООО "Мариинский"

                        <br><i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <a href="mailto:info@mariinsky.by"> info@mariinsky.by </a>
                        <br><i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <a href="mailto:hotel_mariinskiy@mail.ru">hotel_mariinskiy@mail.ru</a>
                        <br><i class="fa fa-phone" aria-hidden="true"></i>
                        Тел.:<a href="tel:+375163641000"> +375 (163) 641-000</a>
                        <br>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        Тел.:<a href="tel:+375163641000"> +375 (163) 642-000</a><br>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        Тел.:<a href="tel:+375293099060"> +375 (29) 309-90-60</a><br>



                    </p>
                </div>

            </div>






            © 2017 — <?php echo current_time('Y'); ?> ОФИЦИАЛЬНЫЙ САЙТ ГОСТИНИЦЫ ООО "Отель Мариинский"

        </div></footer><!-- #colophon -->
</div><!-- #page -->





<?php wp_footer(); ?>
<script src="<?echo get_template_directory_uri()?>/js/lightbox.js"></script>
<script src="<?echo get_template_directory_uri()?>/js/jquery.min.js"></script>
<script src="<?echo get_template_directory_uri()?>/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?echo get_template_directory_uri()?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?echo get_template_directory_uri()?>/js/jquery.stellar.min.js"></script>
<script src="<?echo get_template_directory_uri()?>/js/owl.carousel.min.js"></script>
<script src="<?echo get_template_directory_uri()?>/js/scrollax.min.js"></script>
<script src="<?echo get_template_directory_uri()?>/js/main.js"></script>
<script src="https://use.fontawesome.com/aef31a1803.js"></script>
<link rel="stylesheet" type="text/css" href="<?echo get_template_directory_uri()?>/css/font-awesome.css"/>
<script type="text/javascript" src="<?echo get_template_directory_uri()?>/bootstrap/slick/slick.min.js"></script>
<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'disableScrolling': true,
        'showImageNumberLabel': false

    })
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.your-class').slick({
            infinite: true,
            arrows: true,
            dots: true,
            autoplay: true,
            autoplaySpeed: 1500,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: false
                    }
                },

                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]


        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.gallery').slick({
            slidesToShow: 4,
            centerMode: true,
            slidesToScroll: 1,
            arrows: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 1500,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },

                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true
                    }
                }]
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){

        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav',
            autoplay: true
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            centerMode: false,
            focusOnSelect: true

        });
    });
</script>



</body>
</html>
