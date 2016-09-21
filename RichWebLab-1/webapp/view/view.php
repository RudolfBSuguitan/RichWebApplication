<?php
class View {
	private $model;
	private $controller;

	public function __construct($controller, $model) {
		$this->controller = $controller;
		$this->model = $model;
	}
	
	public function getHTMLOutput() {
		$num = $this->model->sesNum;
		
		//include the basic HTML5 template
		include ("template/html.php");
	}
}
?>