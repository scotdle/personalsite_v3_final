



<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

        <div class="row project_0">

            <div class="col-md-12 projectcontainer">


                <div id="secondary"  role="complementary">
                    <div class="widget-area">
						<?php dynamic_sidebar( 'portfolio_0' ); ?>
                    </div><!-- .widget-area -->
                </div><!-- #secondary -->

            </div>

        </div>

        <div class="row project_1">
            <div class="col-md-6 projectcontainer">

                <div id="secondary"  role="complementary">
                    <div class="widget-area">
						<?php dynamic_sidebar( 'portfolio_1b' ); ?>
                    </div><!-- .widget-area -->
                </div><!-- #secondary -->

            </div>

            <div class="col-md-6 projectcontainer">

                <div id="secondary"  role="complementary">
                    <div class="widget-area">
						<?php dynamic_sidebar( 'portfolio_1a' ); ?>
                    </div><!-- .widget-area -->
                </div><!-- #secondary -->

            </div>
        </div>




        <div class="row project_2">

                    <div class="col-md-6 projectcontainer">


				<div id="secondary"  role="complementary">
					<div class="widget-area">
						<?php dynamic_sidebar( 'portfolio_2a' ); ?>
					</div><!-- .widget-area -->
				</div><!-- #secondary -->

			</div>

                <div class="col-md-6 projectcontainer">

                    <div id="secondary"  role="complementary">
                        <div class="widget-area">
							<?php dynamic_sidebar( 'portfolio_2b' ); ?>
                        </div><!-- .widget-area -->
                    </div><!-- #secondary -->

                </div>
		</div>


        <div class="row project_3">
            <div class="col-md-6 projectcontainer">

                <div id="secondary"  role="complementary">
                    <div class="widget-area">
						<?php dynamic_sidebar( 'portfolio_3b' ); ?>
                    </div><!-- .widget-area -->
                </div><!-- #secondary -->

            </div>

            <div class="col-md-6 projectcontainer">

                <div id="secondary"  role="complementary">
                    <div class="widget-area">
				        <?php dynamic_sidebar( 'portfolio_3a' ); ?>
                    </div><!-- .widget-area -->
                </div><!-- #secondary -->

            </div>
        </div>

        <div class="row project_4">
            <div class="col-md-6 projectcontainer">

                <div id="secondary"  role="complementary">
                    <div class="widget-area">
						<?php dynamic_sidebar( 'portfolio_4a' ); ?>
                    </div><!-- .widget-area -->
                </div><!-- #secondary -->

            </div>

            <div class="col-md-6 projectcontainer">

                <div id="secondary"  role="complementary">
                    <div class="widget-area">
						<?php dynamic_sidebar( 'portfolio_4b' ); ?>
                    </div><!-- .widget-area -->
                </div><!-- #secondary -->

            </div>
        </div>





	</div>

</article><!-- #post-## -->





