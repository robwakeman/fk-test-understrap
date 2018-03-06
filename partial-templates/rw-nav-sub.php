
<pre>This is rw-nav-sub.php</pre>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown2" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- The WordPress Menu goes here -->
		<?php wp_nav_menu(
			array(
				'theme_location'  => 'nav-sub',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarNavDropdown2',
				'menu_class'      => 'navbar-nav',
				'fallback_cb'     => '',
				'menu_id'         => 'sub-menu',
				'walker'          => new understrap_WP_Bootstrap_Navwalker(),
			)
		); ?>

</nav><!-- .site-navigation -->

