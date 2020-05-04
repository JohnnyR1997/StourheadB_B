<DOCTYPE html>

	<html <?php language_attributes(); ?>>

		<head>
			<meta charset="<?php bloginfo('charset');?>">
			<meta name= "viewport" content="width = device-width">
			<title><?php bloginfo('name');?></title>
			<?php wp_head(); ?>
		</head>
	<!---/site-header-->
		<header>
				<!---site-header-->
					<h1><span class="stretch"><a href = "<?php echo home_url();?>"><?php bloginfo('name')?></a></span></h1>
				<!--navigation-->
				<nav>
					<ul>
						<li ><img src="http://localhost/stourhead%20B&B/wordpress/wp-content/uploads/2020/02/burgerV2-1.png"><a href="#"></a>
							<ul>
								<li><a href="http://localhost/stourhead%20B&B/wordpress/">Home</a></li>
								<li><a href="http://localhost/stourhead B&B/wordpress/?page_id=60">Rooms</a></li>
								<li><a href="http://localhost/stourhead B&B/wordpress/?page_id=54">Gallery</a></li>
								<li><a href="http://localhost/stourhead B&B/wordpress/?page_id=214">Local</a></li>
								<li><a href="http://localhost/stourhead B&B/wordpress/?page_id=15">Stourhead Blog</a></li>
								<li><a href="http://localhost/stourhead B&B/wordpress/?page_id=58">Contact Us</a></li>
							</ul>
						</li>
					</ul>
				</nav>

		<a href="https://via.eviivo.com/StourheadG"target="_blank"><h3>Book Now</h3></a>
		</header>
		<body <?php body_class(); ?>>