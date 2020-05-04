<?php
/*
*Template Name: Home-Template
*/
get_header();?>

<div class="container">
	<div class ="left-Text">
		<?php
		if(have_posts()):
		while(have_posts()): the_post();
		?>
		<p><?php the_content()?></p>
		<?php endwhile;
		else:
			echo " No content Found";
		endif;
		?>
	</div>

	<div class="img-Home-right">
		<a href="http://localhost/stourhead B&B/wordpress/?page_id=60">
			<div class="wp-block-cover has-background-dim" style="background-image: url('http://localhost/stourhead%20B&amp;B/wordpress/wp-content/uploads/2020/02/IMG_6737.jpg'); width: 100%; height: 700px;">
				<div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"top","placeholder":"Write title…","fontSize":"large"} -->
					<p class="has-text-align-center has-large-font-size">Rooms</p>
		<!-- /wp:paragraph --></div>
			</div>
		</a>
	</div>
	<div style="float: left; width: 48%; padding: 5px;">
		<div class="img" style="float: left; width: 47%; padding-left: 0px;">
			<a href="http://localhost/stourhead B&B/wordpress/?page_id=15">
				<div class="wp-block-cover has-background-dim" style="background-image: url('http://localhost/stourhead%20B&amp;B/wordpress/wp-content/uploads/2020/02/IMG_1536.jpg');">
					<div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"top","placeholder":"Write title…","fontSize":"large"} -->
					<p class="has-text-align-center has-large-font-size">Stourhead Blog</p>

		<!-- /wp:paragraph --></div>
				</div>
			</a>
		</div>
		<div class="img" style="float: right; width: 47%; padding-right: 0px;">
			<a href="http://localhost/stourhead B&B/wordpress/?page_id=58">
				<div class="wp-block-cover has-background-dim" style="background-image: url('http://localhost/stourhead%20B&amp;B/wordpress/wp-content/uploads/2020/02/banner.png');">
					<div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
					<p class="has-text-align-center has-large-font-size">Contact Us</p>
		<!-- /wp:paragraph --></div>
				</div>
			</a>
		</div>
	</div>
	<!-- /wp:html -->
	<div class="img-Home-Right">
		<a href="http://localhost/stourhead B&B/wordpress/?page_id=54">
			<div class="wp-block-cover has-background-dim" style="background-image: url('http://localhost/stourhead%20B&amp;B/wordpress/wp-content/uploads/2020/02/IMG_6849-scaled.jpg');">
				<div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
				<p class="has-text-align-center has-large-font-size">Gallery</p>
		<!-- /wp:paragraph --></div>
			</div>
		</a>
	</div>
	<!-- /wp:html --><!-- /wp:html -->
	<div class="img-Home-Left">
		<a href="http://localhost/stourhead B&B/wordpress/?page_id=214">
			<div class="wp-block-cover has-background-dim" style="background-image: url('http://localhost/stourhead%20B&amp;B/wordpress/wp-content/uploads/2020/02/IMG_6849-scaled.jpg');">
				<div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
				<p class="has-text-align-center has-large-font-size">Local</p>
		<!-- /wp:paragraph --></div>
			</div>
		</a>
	</div>
	<!-- /wp:html -->
</div>