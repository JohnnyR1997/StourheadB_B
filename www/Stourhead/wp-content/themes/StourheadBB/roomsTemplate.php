<?php
/*
*Template Name: Rooms-Template
*/
get_header();?>

<div class="container">
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

	<div class="rooms-img">
		<a href="http://localhost/stourhead B&B/wordpress/?page_id=252">
			<div class="wp-block-cover has-background-dim" style="background-image: url('http://localhost/stourhead%20B&amp;B/wordpress/wp-content/uploads/2020/02/IMG_1536.jpg');">
				<div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
					<p class="has-text-align-center has-large-font-size">Howard Room</p>
					<!-- /wp:paragraph -->
				</div>
			</div>
		</a>
	</div>
	<div class="rooms-img">
		<a href="http://localhost/stourhead B&B/wordpress/?page_id=269">
			<div class="wp-block-cover has-background-dim" style="background-image: url('http://localhost/stourhead%20B&amp;B/wordpress/wp-content/uploads/2020/02/IMG_1536.jpg');">
				<div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
					<p class="has-text-align-center has-large-font-size">Garden Room</p>
					<!-- /wp:paragraph -->
				</div>
			</div>
		</a>
	</div>
	<div class="rooms-img">
		<a href="http://localhost/stourhead B&B/wordpress/?page_id=265">
			<div class="wp-block-cover has-background-dim" style="background-image: url('http://localhost/stourhead%20B&amp;B/wordpress/wp-content/uploads/2020/02/IMG_1536.jpg');">
				<div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
					<p class="has-text-align-center has-large-font-size">Church Room</p>
					<!-- /wp:paragraph -->
				</div>
			</div>
		</a>
	</div>
</div>
<?php get_footer(); ?>