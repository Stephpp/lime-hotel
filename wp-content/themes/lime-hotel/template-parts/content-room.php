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

<h1><?=$room_title?></h1>
<h2><?=$room_description?></h2>
<h3><?=$room_size?></h3>
<h3><?=$room_guests?></h3>