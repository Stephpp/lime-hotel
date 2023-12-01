<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lime_hotel
 */

?>

<!-- get current post -->
<?php 
$room = get_post();
$room_title = $room->room_title;
$room_description = $room->room_description;
$room_size = $room->room_size;
$room_guests = $room->room_guests;
$room_gallery = $room->room_image_gallery;
?>

<section class="page-content room-section">
    <h1 class="page-heading"><?=$room_title?></h1>
    <div class="room-content-wrapper">
        <div class="room-details-wrapper">
            <div class="room-details-group"><p class="room-details-title">Room Size</p>
                <p class="room-details-text"><?=$room_size?></p>
            </div>
            <div class="room-details-group"><p class="room-details-title">Guests</p>
                <p class="room-details-text"><?=$room_guests?></p>
            </div>
        </div>
        <div class="room-description-wrapper">
            <p><?=$room_description?></p>
        </div>
    </div>
    <a class="arrow-link" href="javascript:;">
        Book <?php echo $room->room_title; ?>
        <img src="<?php echo get_template_directory_uri() . '/assets/link-arrow.svg' ?>" alt="link arrow"/>
    </a>
</section>