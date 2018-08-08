<?php
/**
 * Template Name: Contact Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

    <div class="<?php echo esc_attr( $container ); ?> " id="content">

        <div class="row">

            <div class="col-md-12 content-area" id="primary">

                <main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content-contact', 'page' ); ?>

					<?php endwhile; // end of the loop. ?>


                </main><!-- #main -->

            </div><!-- #primary -->

        </div><!-- .row end -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->


<script>

    var namegiven = document.getElementsByClassName("your-name")[0].firstChild;

    namegiven.addEventListener("keyup", nameAlert);

    function nameAlert() {
        entrytitle = document.getElementsByClassName("entry-title")[0];

      var  entrytitlemessage = "nice to meet you " + namegiven.value + "!";

        entrytitle.innerHTML =  entrytitlemessage;

if (namegiven.value === "") {

    entrytitle.innerHTML =  "lets talk";

}
    }
</script>
<?php get_footer(); ?>

