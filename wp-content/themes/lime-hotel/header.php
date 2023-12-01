<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lime_hotel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link
	rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
	/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://api.fontshare.com/v2/css?f[]=sentient@400,301,500,300&display=swap" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lime-hotel' ); ?></a>

	<header class="site-header">
		<?php if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		} ?>

		<div class="swiper">
			<div class="swiper-wrapper">
				<?php if (get_post_type() === 'room') {
					// If current page is a room, then the slider gets the room's gallery images for the header swiper
					$images = rwmb_meta( 'room_image_gallery' );
					foreach ( $images as $image ) { 
						$image_full = wp_get_attachment_image_src($image['ID'], 'full'); ?>
					
						<div class="swiper-slide">
							<img src="<?= $image_full[0]; ?>" alt="<?= $image['title']; ?>">
						</div>
					<?php }
					
				} else { 
					// else, the featured image is set as the header image 
					?>
					<div class="swiper-slide">
						<img src=<?php echo esc_url( get_the_post_thumbnail_url() ); ?> alt=<?php echo esc_attr( get_the_post_thumbnail_caption() ); ?> />
					</div>
				<?php } ?>
			</div>

			<div class="swiper-button-wrapper">
				<div class="swiper-arrow-button swiper-button-prev-custom">
					<img src="<?php echo get_template_directory_uri() . '/assets/header-arrow.svg' ?>" alt="previous slide" style="rotate: 180deg"/>
				</div>
				<div class="swiper-arrow-button swiper-button-next-custom">
					<img src="<?php echo get_template_directory_uri() . '/assets/header-arrow.svg' ?>" alt="previous slide" />
				</div>
			</div>
			
		</div>
	</header>
</div>
