<?php
/**
 * Template Name: RW Sub Nav
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content">


		<div class="row">
			<div class="col">
				<pre>This is rw-subnavpage.php</pre>
				<p class="bg-danger text-light">Testing the BS colour variables e.g. success, info, warning, danger</p>
				
				<?php get_template_part( 'partial-templates/rw-nav', 'sub' ); ?>

			</div>
		</div>


		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', '' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

					<img class="rounded-circle" src="http://www.joaddison.com/wp-content/uploads/mustav-900x674.jpg" alt="">



					<div class="table-responsive">
						<table class="table">
						  <tr>
						    <th>Entry Header 1</th>
						    <th>Entry Header 2</th>
						    <th>Entry Header 3</th>
						    <th>Entry Header 4</th>
						    <th>Entry Header 5</th>
						    <th>Entry Header 6</th>
						    <th>Entry Header 7</th>
						    <th>Entry Header 8</th>
						  </tr>
						  <tr>
						    <td>Entry First Line 1</td>
						    <td>Entry First Line 2</td>
						    <td>Entry First Line 3</td>
						    <td>Entry First Line 4</td>
						    <td>Entry First Line 5</td>
						    <td>Entry First Line 6</td>
						    <td>Entry First Line 7</td>
						    <td>Entry First Line 8</td>
						  </tr>
						  <tr>
						    <td>Entry Line 1</td>
						    <td>Entry Line 2</td>
						    <td>Entry Line 3</td>
						    <td>Entry Line 4</td>
						    <td>Entry Line 5</td>
						    <td>Entry Line 6</td>
						    <td>Entry Line 7</td>
						    <td>Entry Line 8</td>
						  </tr>
						  <tr>
						    <td>Entry Last Line. This has more content 1</td>
						    <td>Entry Last Line. This has more content 2</td>
						    <td>Entry Last Line. This has more content 3</td>
						    <td>Entry Last Line. This has more content 4</td>
						    <td>Entry Last Line. This has more content 5</td>
						    <td>Entry Last Line. This has more content 6</td>
						    <td>Entry Last Line. This has more content 7</td>
						    <td>Entry Last Line. This has more content 8</td>
						  </tr>
						</table>
					</div>



				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
