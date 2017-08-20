<?php include('config/setup.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		 <title><?php echo $page['title'] . " | " . $site_title; /*echo $site_name . " | " . $site_title */ ?></title>
		 <meta name="viewport" content="width=device=width, initial-scale=1.0">
		 <?php include('config/css_link.php'); ?>
		 <?php include('config/js.php'); ?>
	</head>

	<body>
		<!--<i class="fa fa-leaf"></i> -->
		<div id="wrap">
			<?php include(D_TEMPLATE.'/navigation.php'); ?>
			<div class="container">
				<h1><?php echo $page['header']; ?></h1>
				<?php  echo $page['body_formatted'] ?>
			</div>
		</div> <!-- End Wrap Footer -->
		<?php include(D_TEMPLATE.'/footer.php'); ?>
	</body>
</html>