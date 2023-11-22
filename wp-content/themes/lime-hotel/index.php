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
		$rooms = get_posts( array(
			'numberposts' => -1,
			'post_type'   => 'room',
			'orderby'     => 'room_title',
			'order'       => 'DESC',
		) );

		foreach( $rooms as $room ){ ?>
			<div class="room">
				<!-- link to post url -->
				<a href="<?=get_permalink( $room->ID )?>">
					<div class="room__title"><?php echo $room->room_title; ?></div>
				</a>
			</div>
		<?php } ?>


	</main><!-- #main -->

<?php
get_footer();