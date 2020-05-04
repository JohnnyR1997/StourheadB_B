<?php
/*
*Template Name: Main-template
*/

get_header();
if(have_posts()):
while(have_posts()): the_post();
?>
<p><?php the_content()?></p>
<?php endwhile;
else:
	echo " No content Found";
endif;


get_footer();
?>