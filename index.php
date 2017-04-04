<html>
<head>
	<title>Gallery</title>
	<style>
		img{
			width: 100%;
		}
	</style>
	<script
	  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
	  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
	  crossorigin="anonymous"></script>
	</head>

<body>
	<?php
	$dir = scandir("images");
	$i = 0;
	foreach ($dir as $file) {
		if($file!='.' && $file!='..'){	
			if($i == 0){
				echo "<img class='first-img' src='images/".$file."' alt='".$file."' />";
				$i++;	
			}else{
				echo "<img data-src='images/".$file."' alt='".$file."' style='display:none;' />";
			}
			
		}
	}
	?>

<script>
	$(function(){
		var img = $('img');
		img.on("click",function(){
			var $this = $(this);
			var next = $this.next();
			var src = $this.prop('src');
			$this.prop('src', '');
			$this.prop('data-src', src);
			$this.hide();
			var data = next.data('src');
			next.prop('src', data);
			next.prop('data-src','');
			next.show('fast');
		});
	});
</script>	
</body>


</html>