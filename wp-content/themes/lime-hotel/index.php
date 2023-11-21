<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lime_hotel
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		$posts = get_posts( array(
			'numberposts' => -1,
			'category' => 'Room',
			'post_type'   => 'post',
			'orderby'     => 'room_title',
			'order'       => 'ASC',
		) );

		foreach( $posts as $post ){ ?>
			<div class="room">
				<div class="room__title"><?php echo $post->room_title; ?></div>
			</div>
		<?php } ?>


	</main><!-- #main -->

<?php
get_footer();