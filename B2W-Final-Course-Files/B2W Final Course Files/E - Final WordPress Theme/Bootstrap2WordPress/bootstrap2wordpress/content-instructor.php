<?php
$instructor_section_title	= get_field('instructor_section_title');
$instructor_name			= get_field('instructor_name');
$bio_excerpt				= get_field('bio_excerpt');
$full_bio					= get_field('full_bio');
$twitter_username			= get_field('twitter_username');
$facebook_username			= get_field('facebook_username');
$google_plus_username		= get_field('google_plus_username');
$num_students				= get_field('num_students');
$num_reviews				= get_field('num_reviews');
$num_courses				= get_field('num_courses');
?>

<!-- INSTRUCTOR
================================================== -->
<section id="instructor">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-md-6">
				<div class="row">
					<div class="col-lg-8">
						<h2><?php echo $instructor_section_title; ?> <small><?php echo $instructor_name; ?></small></h2>
					</div><!-- end col -->
					
					<div class="col-lg-4">
						
						<?php if( !empty($twitter_username) ): ?>
						<a href="https://twitter.com/<?php echo $twitter_username; ?>" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
						<?php endif; ?>
						
						<?php if( !empty($facebook_username) ): ?>
						<a href="https://facebook.com/<?php echo $facebook_username; ?>" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
						<?php endif; ?>
						
						<?php if( !empty($google_plus_username) ): ?>
						<a href="https://plus.google.com/<?php echo $google_plus_username; ?>" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
						<?php endif; ?>
						
					</div><!-- end col -->
					
				</div><!-- row -->
				
				<p class="lead"><?php echo $bio_excerpt; ?></p>
				
				<?php echo $full_bio; ?>
				
				<hr>
				
				<h3>The Numbers <small>They Don't Lie</small></h3>
				
				<div class="row">
					<div class="col-xs-4">
						<div class="num">
							<div class="num-content">
								<?php echo $num_students; ?> <span>students</span>
							</div><!-- num-content -->
						</div><!-- num -->
					</div><!-- end col -->
					
					<div class="col-xs-4">
						<div class="num">
							<div class="num-content">
								<?php echo $num_reviews; ?>+ <span>reviews</span>
							</div><!-- num-content -->
						</div><!-- num -->
					</div><!-- end col -->
					
					<div class="col-xs-4">
						<div class="num">
							<div class="num-content">
								<?php echo $num_courses; ?> <span>courses</span>
							</div><!-- num-content -->
						</div><!-- num -->
					</div><!-- end col -->
				</div><!-- row -->
				
			</div><!-- end col -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- instructor -->