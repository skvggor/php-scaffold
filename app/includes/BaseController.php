<?php
	class BaseController {
		protected static function set_view($view, $parameters) {
			Flight::render($view, $parameters, 'content');
			Flight::render('base/template');
		}
	}
?>
