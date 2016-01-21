<?php
	foreach (glob("includes/*.php") as $filename) {
		require_once $filename;
	}

	foreach (glob("controller/*.php") as $filename) {
		require_once $filename;
	}
?>
