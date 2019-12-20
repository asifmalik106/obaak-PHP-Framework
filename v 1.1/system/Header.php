<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $data['title'];?></title>
	<link rel="stylesheet" type="text/css" href="asset/bootstrap.min.css">

	<?php
		if(isset($data['css'])){
			foreach ($data['css'] as $css) {
				echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"$css\">";
			}
		}
	?>

	<?php
		if(isset($data['js'])){
			foreach ($data['js'] as $js) {
				echo "<script type=\"text/javascript\" src=\"$js\"></script>";
			}
		}
	?>

</head>
