<?php
/**
 * Partial template for content in rw-fullwidthpage.php
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

	<pre>rw-fullwidthpage.php</pre>

	<h1>This is H1 oh yes it is ahax</h1>
	<h5>This is H5</h5>
	<h6>This is H6</h6>
	<p>This is a paragraph</p>

	<div class="display-1">This is display-1 and it works</div>

	<div class="row dynamic-cols">
		<div class="col p2 mb-3">as as Lorem ipsum dolor sit amet bobb, consectetur adipisicing elit. Eveniet id tempora ipsa quaerat, doloremque desecstttdrunt enim, dignissimos omnis beatae deleniti nesciunt excepturi dolor, reiciendis accusamus. Asperiores, fugiat. Eaque, rem, repellendus.</div><div class="col p2 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet id tempora ipsa quaerat, doloremque dcstttdeserunt enim, dignissimos omnis beatae deleniti nesciunt excepturi dolor, reiciendis accusamus. Asperiores, fugiat. Eaque, rem, repellendus.</div><div class="col p2 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet id tempora ipsa quaerat, doloremque desecstttdrunt enim, dignissimos omnis beatae deleniti nesciunt excepturi dolor, reiciendis accusamus. Asperiores, fugiat. Eaque, rem, repellendus.</div><div class="col p2 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet id tempora ipsa quaerat, doloremquecstttd deserunt enim, dignissimos omnis beatae deleniti nesciunt excepturi dolor, reiciendis accusamus. Asperiores, fugiat. Eaque, rem, repellendus.</div><div class="col p2 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet id tempora ipsa quaerat, doloremque dcstttdeserunt enim, dignissimos omnis beatae deleniti nesciunt excepturi dolor, reiciendis accusamus. Asperiores, fugiat. Eaque, rem, repellendus.</div>
		<div class="col p2 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet id tempora ipsa quaerat, doloremque desecstttdrunt enim, dignissimos omnis beatae deleniti nesciunt excepturi dolor, reiciendis accusamus. Asperiores, fugiat. Eaque, rem, repellendus.</div><div class="col p2 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet id tempora ipsa quaerat, doloremquecstttd deserunt enim, dignissimos omnis beatae deleniti nesciunt excepturi dolor, reiciendis accusamus. Asperiores, fugiat. Eaque, rem, repellendus.</div><div class="col p2 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet id tempora ipsa quaerat, doloremque dcstttdeserunt enim, dignissimos omnis beatae deleniti nesciunt excepturi dolor, reiciendis accusamus. Asperiores, fugiat. Eaque, rem, repellendus.</div><div class="col p2 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet id tempora ipsa quaerat, doloremque desecstttdrunt enim, dignissimos omnis beatae deleniti nesciunt excepturi dolor, reiciendis accusamus. Asperiores, fugiat. Eaque, rem, repellendus.</div><div class="col p2 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet id tempora ipsa quaerat, doloremquecstttd deserunt enim, dignissimos omnis beatae deleniti nesciunt excepturi dolor, reiciendis accusamus. Asperiores, fugiat. Eaque, rem, repellendus.</div><div class="col p2 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet id tempora ipsa quaerat, doloremque dcstttdeserunt enim, dignissimos omnis beatae deleniti nesciunt excepturi dolor, reiciendis accusamus. Asperiores, fugiat. Eaque, rem, repellendus.</div><div class="col p2 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet id tempora ipsa quaerat, doloremque desecstttdrunt enim, dignissimos omnis beatae deleniti nesciunt excepturi dolor, reiciendis accusamus. Asperiores, fugiat. Eaque, rem, repellendus.</div><div class="col p2 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet id tempora ipsa quaerat, doloremquecstttd deserunt enim, dignissimos omnis beatae deleniti nesciunt excepturi dolor, reiciendis accusamus. Asperiores, fugiat. Eaque, rem, repellendus.</div><div class="col p2 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet id tempora ipsa quaerat, doloremque dcstttdeserunt enim, dignissimos omnis beatae deleniti nesciunt excepturi dolor, reiciendis accusamus. Asperiores, fugiat. Eaque, rem, repellendus.</div>
	</div>

	<div class="d-sm-flex justify-content-sm-center justify-content-md-between">
		<div class="fishy">Fishy 1 swaaxcc</div>
		<div class="fishy">Fishy 2</div>
		<div class="fishy">Fishy 3</div>
		<div class="fishy">Fishy 4</div>
	</div>




	<div class="d-sm-flex justify-content-sm-between flex-sm-wrap flex-lg-wrap flex-xlg-nowrap">

			<div class="card card-tiger mb-3">
			  <img class="card-img-top tiger" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg/1200px-Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h4 class="card-title">Card title 1</h4>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go</a>
			  </div>
			</div>

			<div class="card card-tiger mb-3">
			  <img class="card-img-top tiger" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg/1200px-Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h4 class="card-title">Card title 2</h4>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go</a>
			  </div>
			</div>


			<div class="card card-tiger mb-3">
			  <img class="card-img-top tiger" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg/1200px-Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h4 class="card-title">Card title 3</h4>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go</a>
			  </div>
			</div>


			<div class="card card-tiger mb-3">
			  <img class="card-img-top tiger" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg/1200px-Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h4 class="card-title">Card title 4</h4>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go</a>
			  </div>
			</div>

			<div class="card card-tiger mb-3">
			  <img class="card-img-top tiger" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg/1200px-Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h4 class="card-title">Card title 5</h4>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go</a>
			  </div>
			</div>

	</div>

<!-- class options: card-group card-deck card-columns -->
<div class="container card-deck">

	<div class="card card-tiger-notflex mb-3">
	  <img class="card-img-top tiger" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg/1200px-Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg" alt="Card image cap">
	  <div class="card-body">
	    <h4 class="card-title">Card grouping classes 1</h4>
	    <h5 class="card-subtitle">This is a subtitle</h5>
	    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    <a href="#" class="btn btn-primary">Go</a>
	  </div>
	</div>

	<div class="card card-tiger-notflex mb-3">
	  <img class="card-img-top tiger" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg/1200px-Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg" alt="Card image cap">
	  <div class="card-body">
	    <h4 class="card-title">Card grouping classes 2</h4>
	    <p class="card-text">Some quick example <a href="#" class="card-link">text</a> to build on the card title and make up the bulk of the card's content.</p>
	    <a href="#" class="btn btn-primary">Go</a>
	  </div>
	</div>


	<div class="card card-tiger-notflex mb-3">
	  <img class="card-img-top tiger" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg/1200px-Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg" alt="Card image cap">
	  <div class="card-body">
	    <h4 class="card-title">Card grouping classes 3</h4>
	    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    <a href="#" class="btn btn-primary">Go</a>
	  </div>
	</div>


	<div class="card card-tiger-notflex mb-3">
	  <img class="card-img-top tiger" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg/1200px-Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg" alt="Card image cap">
	  <div class="card-body">
	    <h4 class="card-title">Card grouping classes 4</h4>
	    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    <a href="#" class="btn btn-primary">Go</a>
	  </div>
	</div>


	<div class="card card-tiger-notflex mb-3">
	  <img class="card-img-top tiger" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg/1200px-Panthera_tigris_corbetti_%28Tierpark_Berlin%29_832-714-%28118%29.jpg" alt="Card image cap">
	  <div class="card-body">
	    <h4 class="card-title">Card grouping classes 5</h4>
	    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    <a href="#" class="btn btn-primary">Go</a>
	  </div>
	</div>

</div>


		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
