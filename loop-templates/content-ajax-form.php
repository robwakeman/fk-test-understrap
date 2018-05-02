<?php
/**
 * Partial template for content in page-ajax-form.php
 *
 * @package understrap
 */

?>



<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h2>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<div class="row">
			<div class="col">
				<!-- form here -->
				<form action="#" id="rw-contact-form" class="rw-contact-form needs-validation w-50" method="post" novalidate>

					<!-- value of hidden field must match Ajax request's 'action' property in rwajaxform.php
				 i.e. wp_ajax_$youraction() -->
					<input type="hidden" name="action" value="contact_us">

				  <div class="form-group">
			      <label for="name">Name</label>
			      <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
			      <div class="invalid-feedback">
			        Please provide a name
			      </div>
			    </div>

				  <div class="form-group">
			      <label for="email">Email</label>
			      <input type="email" class="form-control" name="email" id="email" placeholder="Email"
						pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"
						required>
			      <div class="invalid-feedback">
			        Please provide a valid email
			      </div>
			    </div>
					 
		      <div class="form-group">
		        <label for="message">Example textarea</label>
		        <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
		        <div class="invalid-feedback">
		          Please provide a message
		        </div>
		      </div>
					   
					<button class="btn btn-primary" type="submit">Submit form</button>

				</form>
			</div> <!-- col -->
		</div> <!-- row -->

		<div class="row loading-icon-container">
			<div class="col loading-icon m-5"></div>
		</div>

		<div id="rw-contact-form-feedback"></div>


	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
