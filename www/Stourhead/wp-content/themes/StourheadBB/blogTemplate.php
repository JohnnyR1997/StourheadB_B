<?php
/*
*Teplate Name: blog
*/

get_header();
if(have_posts()):
while(have_posts()): the_post();
?>
<h1><?php the_title()?></h1>
<p><?php the_content()?></p>
<?php endwhile;
else:
	echo " No content Found";
endif;

get_footer();
?>