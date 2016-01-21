<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			<?php
				echo Flight::has('title') ? Flight::get('title') : 'Example';
			?>
		</title>
	</head>
	<body>
