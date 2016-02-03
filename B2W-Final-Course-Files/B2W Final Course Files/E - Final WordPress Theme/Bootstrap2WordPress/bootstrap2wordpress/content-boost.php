<?php	
$income_feature_image	= get_field('income_feature_image');
$income_section_title	= get_field('income_section_title');
$income_section_desc	= get_field('income_section_description');
$reason_1_title			= get_field('reason_1_title');
$reason_1_desc			= get_field('reason_1_description');
$reason_2_title			= get_field('reason_2_title');
$reason_2_desc			= get_field('reason_2_description');
?>

<!-- BOOST YOUR INCOME
================================================== -->
<section id="boost-income">
	<div class="container">
		
		<div class="section-header">
			
			<!-- If user uploaded an image -->
			<?php if( !empty($income_feature_image) ) : ?>
			
			<img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
			
			<?php endif; ?>
			
			<h2><?php echo $income_section_title; ?></h2>
		</div><!-- section-header -->
		
		<p class="lead"><?php echo $income_section_desc; ?></p>
		<div class="row">
			<div class="col-sm-6">
				<h3><?php echo $reason_1_title; ?></h3>
				<p><?php echo $reason_1_desc; ?></p>
			</div><!-- col -->
			<div class="col-sm-6">
				<h3><?php echo $reason_2_title; ?></h3>
				<p><?php echo $reason_2_desc; ?></p>
			</div><!-- col -->
		</div><!-- row -->
		
	</div><!-- container -->
</section><!-- boost-income -->