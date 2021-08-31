<!DOCTYPE html>
<html>
	<head>
		<?php require "../application/gabarit/inc_head.php" ?>
	</head>
	<body class="container">
		<div class="container">
			<div>
				<?php require "../application/gabarit/inc_entete.php" ?>
			</div>			
			<div class=" mt-5 mb-5 pt-5 pb-5">
				<?php require $this->vue; ?>
			</div>		
		</div>		
		<?php require "../application/gabarit/inc_pied.php"; ?>					
	</body>	
</html>