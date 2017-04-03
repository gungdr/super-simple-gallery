<?php
	$dir = scandir("images");
	foreach ($dir as $file) {
		if($file!='.' && $file!='..'){	
			echo "<img src='images/".$file."' alt='".$file."' style='max-width:1024px;min-width:800px;' />";
		}
	}
?>