<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lime_hotel
 */

?>

<section id="post-<?php the_ID(); ?>">
	<?php the_title( '<h1 class="page-title page-heading">', '</h1>' ); ?>

	<div class="page-content">
		<?php
		the_content();

		// if is front page
		if( is_front_page() ){
			$rooms = get_posts( array(
				'numberposts' => -1,
				'post_type'   => 'room',
				'orderby'     => 'room_title',
				'order'       => 'DESC',
			) );
			
			if ( ! empty( $rooms ) ) { ?>
				<section class="homepage-rooms-section">
					<h2 class="page-heading">Our Rooms</h2>
			<?php }
			foreach( $rooms as $room ){ ?>
				<div class="home-room">
					<div class="home-room-content">
						<h3 class="home-room-title page-heading"><?php echo $room->room_title; ?></h3>
						<div class="home-room-details-wrapper">
							<span><?php echo $room->room_size;?></span>
							<span><?php echo $room->room_guests;?></span>
						</div>
						<p class="home-room-description">
							<!-- echo the excerpt of the room -->
							<?php echo $room->post_excerpt; ?>
						</p>
						<a class="arrow-link" href="<?=get_permalink( $room->ID )?>">
							Discover <?php echo $room->room_title; ?>
							<img src="<?php echo get_template_directory_uri() . '/assets/link-arrow.svg' ?>" alt="link arrow"/>
						</a>
					</div>
					<div class="home-room-image-wrapper">
						<?php echo get_the_post_thumbnail( $room->ID, 'full' ); ?>
					</div>
				</div>
			<?php } ?>
			</section>
		<?php } ?>
	</div>

</section>
