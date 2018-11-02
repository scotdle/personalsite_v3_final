



<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

<div class="col-md-12 single_widget  ">

    <div id="secondary"  role="complementary">
        <div class="photo_gallery">
			<?php dynamic_sidebar( 'photo_gallery' ); ?>
        </div><!-- .widget-area -->
    </div><!-- #secondary -->

</div>


<div class="col-md-12">

<div class= "row">
        <div class="col-md-6 video1">
			<?php dynamic_sidebar( 'video1' ); ?>
        </div><!-- .widget-area -->

            <div class="col-md-6 video2">
        			<?php dynamic_sidebar( 'video2' ); ?>
                </div><!-- .widget-area -->
</div>
<div class= "row">

       <div class="col-md-6 video3">
   			<?php dynamic_sidebar( 'video3' ); ?>
           </div><!-- .widget-area -->

           <div class="col-md-6 video4">
       			<?php dynamic_sidebar( 'video4' ); ?>
               </div><!-- .widget-area -->
</div>
</div>



<div class="single_widget bigbannertext"> <?php the_content(); ?> </div>