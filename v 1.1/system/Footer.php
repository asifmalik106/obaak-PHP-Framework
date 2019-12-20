<footer>
  
  <?php
		if(isset($data['js'])){
			foreach ($data['js'] as $js) {
				echo '<script type="text/javascript" src="'.BASE_URL.'asset/js/page/'.$js.'"></script>';
			}
		}
	?>
  
</footer>