<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<title>Ninja gold</title>
		<link rel="stylesheet" href="style.css">
		<link rel = "stylesheet" type = "text/css" href = "<?= base_url(); ?>/css/style.css">
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script>
			$(document).ready(function){
				$('submit').click(function(){
				$('p').append('$value');
			});
			}
			----------
			function addList(){
		 	var node = document.createElement("LI");
		 	var textnode = document.createTextNode('');
		 	node.appendChild(textnode);
		 	document.getElementById("list_box").appendChild(node);
		 }
		</script> -->


		  
	</head>
	<body>
		<div class="wrapper">
			<div class="saving">
				<label for="gold_count">Your Gold</label>
				<input type="text" name="gold_count" value="<?= $totals; ?>">
			</div>
			<form action="process_money" method="POST">
				<h2>Farm</h2>
				<p>(earns 10 - 20 golds)</p>
				<input type="hidden" name="building" value="Farm">
				<input type="submit" value="Find Gold!">
			</form>
			<form action="process_money" method="POST">
				<h2>Cave</h2>
				<p>(earns 5 - 10 golds)</p>
				<input type="hidden" name="building" value="Cave">
				<input type="submit" value="Find Gold!">
			</form>
			<form action="process_money" method="POST">
				<h2>House</h2>
				<p>(earns 2 - 5 golds)</p>
				<input type="hidden" name="building" value="House">
				<input type="submit" value="Find Gold!">
			</form>
			<form action="process_money" method="POST">
				<h2>Casino</h2>
				<p>(earns 0 - 50 golds)</p>
				<input type="hidden" name="building" value="Casino">
				<input type="submit" value="Find Gold!">
			</form>
			<label for="activity">Activities</label>
<!-- <?php
$msg_box = explode("_", $messages);

?> -->		<div class="activity">
					<ul>
		 				<?php for($i = count($msg_box)-1; $i>=0; $i--){?>
							<?php 
								if(stristr($msg_box[$i], 'Lost')){
									$line_row = "lose";
								} else {
									$line_row = "win";
								}
								?>
							<li class="<?= $line_row; ?>"><?= $msg_box[$i] ?></li>
						 <?php }?>
					</ul>
			</div>
		</div>
	</body>
</html>