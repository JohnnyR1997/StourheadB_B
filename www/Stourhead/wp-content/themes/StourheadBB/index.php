<?php

get_header();
if(have_posts()):
while(have_posts()): the_post();
?>

<div class="post_title">
<h1> <?php the_title();	?></h1>
</div>
<div class="post_content">
<p><?php the_content();?></p>
</div>

<?php endwhile;
else:
	echo " No content Found";
endif;

?>