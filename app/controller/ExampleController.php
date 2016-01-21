<?php
	class ExampleController extends BaseController {
		public static function index() {
			Flight::set('title', 'My home page');
			parent::set_view('example/index', null);
		}
	}
?>
