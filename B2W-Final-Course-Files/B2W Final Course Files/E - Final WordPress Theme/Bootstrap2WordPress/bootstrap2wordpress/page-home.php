<?php
/*
	Template Name: Home Page	
*/

get_header(); ?>

	<?php get_template_part('content','hero'); ?>
	
	<?php get_template_part('content','optin'); ?>
	
	<?php get_template_part('content','boost'); ?>
	
	<?php get_template_part('content','benefits'); ?>
	
	<?php get_template_part('content','coursefeatures'); ?>
	
	<?php get_template_part('content','projectfeatures'); ?>
	
	<?php get_template_part('content','featurette'); ?>
	
	<?php get_template_part('content','instructor'); ?>
	
	<?php get_template_part('content','testimonials'); ?>

<?php get_footer(); ?>