<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<title>Ninja gold</title>
		<link rel = "stylesheet" type = "text/css" href = "<?= base_url(); ?>/css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="saving">
				<label for="gold_count">Your Gold</label>
				<input type="text" name="gold_count" value="10000000">
			</div>
			<form action="sources/process_money" method="POST">
				<h2>Farm</h2>
				<p>(earns 10 - 20 golds)</p>
				<input type="hidden" name="building" value="Farm">
				<input type="submit" value="Find Gold!">
			</form>
			<form action="sources/process_money" method="POST">
				<h2>Cave</h2>
				<p>(earns 5 - 10 golds)</p>
				<input type="hidden" name="building" value="Cave">
				<input type="submit" value="Find Gold!">
			</form>
			<form action="sources/process_money" method="POST">
				<h2>House</h2>
				<p>(earns 2 - 5 golds)</p>
				<input type="hidden" name="building" value="House">
				<input type="submit" value="Find Gold!">
			</form>
			<form action="sources/process_money" method="POST">
				<h2>Casino</h2>
				<p>(earns 0 - 50 golds)</p>
				<input type="hidden" name="building" value="Casino">
				<input type="submit" value="Find Gold!">
			</form>
			<label for="activity">Activities</label>
			<ul id="list_box">
					
						<li><?= $messages. "<br/>"; ?><li>
				
			</ul>
			</div>

		</div>
	</body>
</html>