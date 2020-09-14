<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package a25
 */

?>

 <?php
 
    $newtable = $wpdb->get_results( "SELECT * FROM sendmail" );
    print_r($newtable);
    echo $newtable[0]->name;
 
 
 ?>
