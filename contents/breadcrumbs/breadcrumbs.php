<!-- css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/contents/breadcrumbs/css/style-breadcrumbs.css?<?php echo time(); ?>">

<div class="breadcrumbs content_width">
	<?php if (function_exists('bcn_display')) bcn_display(); ?>
</div>