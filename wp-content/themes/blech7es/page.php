<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package blech7es
 */

get_header(); ?>


  <div class="container">
    	<div class="row w centered">
    		<br>		
    		<div class="col-lg-6 col-lg-offset-3">
               
    			<p class="w">Blech 7es means 'Without noise 'or 'Free noise' a term used in the Tunisian dialect to say 'Shut up'. The project aim to encourage young people to express their ideas and to share them with the public for free</p><br/>
                <p dir="rtl" lang="ar" id="ar">فكرة تشاركية، لتسجيل التعبير الصوتي، مجانيآ (بلاش، بوبل)، تشاركيآ، و أن يوزع التسجيل تحت رخصة المشاع الإبداعي.</p>
                	<p >Blech 7es signifie 'Sans bruit' ou 'Bruit gratuit' un terme qu'on utilise dans le dialecte tunisien pour dire 'Arrêtez de faire du bruit' et bien évidemment c'est le contre concept qu'on a utilisé puisque ce projet a comme but encourager les jeunes à exprimer leurs idées et de partager leurs idées avec le grand public</p>
                
                 <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/78685512&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
                
    		</div>
    	</div>
        <div class="row  text-center">
            
            
			<div class="col-lg-8 col-lg-offset-2 w tooltip-demo">
				<a data-toggle="tooltip" title="Facebook" href="https://www.facebook.com/blech7es" target="_blank"><i class="fa fa-facebook"></i></a>
				<a data-toggle="tooltip" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
				<a data-toggle="tooltip" title="youtube" href="https://www.youtube.com/channel/UCJdlB5fhyw2D_Mzq2R7nEqw" target="_blank"><i class="fa fa-youtube"></i></a>

				<a data-toggle="tooltip" title="Email" href="mailto:omar.karray.pro@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a><br/>
                
                <p class="credit w">Website by <a href="http://omar-karray.cu.cc" target="_blank"> Omar Karray </a></p>
				
			</div>
		</div>
        
    </div>







	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
