<?php get_header(); ?>

<?php

	$video = get_field("video","option"); 
	$poster_video = get_field("poster_video","option"); 
	echo $poster_video;
	echo "<br>";
	echo $video;
	echo "<br>";

	$args = array(
		'post_type'	=> 'quhacemos'
	);
	$the_query = new WP_Query( $args );

	if( $the_query->have_posts() ):
		while( $the_query->have_posts() ) : $the_query->the_post();
			echo get_the_title();
			echo "<br>";
			echo get_the_content();
			echo "<br>";
			echo get_field("imagen");
		endwhile;
	endif;

?>

<?php get_footer();