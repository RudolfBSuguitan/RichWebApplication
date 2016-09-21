<?php
class Controller {
	private $model;
	private $action;
	private $validSuite;
	
	public function __construct($model, $action) {
		$this->model = $model;
		$this->action = $action;
		
		switch ($action) {
			case "noZero" :
				$this->noZero();
				break;
			case "noOne" :
				$this->noOne();
				break;
			case "noTwo" :
				$this->noTwo();
				break;
			case "noThree":
				$this->noThree();
				break;
			case "noFour" :
				$this->noFour();
				break;
			case "noFive" :
				$this->noFive();
				break;
			case "noSix" :
				$this->noSix();
				break;
			case "noSeven" :
				$this->noSeven();
				break;
			case "noEight" :
				$this->noEight();
				break;
			case "noNine" :
				$this->noNine();
				break;
			case "clearScreen" :
				$this->clearScreen();
				break;
			case "addNum" :
				$this->addNum();
				break;
			case "equalNum" :
				$this->equalNum();
				break;
		}
		
		$this->defaultActions ();
	}
	
	public function addNum() {
		$this->model->addNum();
	}
	
	public function equalNum() {
		$this->model->equalNum();
	}
	
	public function noZero() {
		$this->model->noZero();
	}
	
	public function noOne() {
		$this->model->noOne();
	}
	
	public function noTwo() {
		$this->model->noTwo();
	}
	
	public function noThree() {
		$this->model->noThree();
	}
	
	public function noFour() {
		$this->model->noFour();
	}
	
	public function noFive() {
		$this->model->noFive();
	}
	
	public function noSix() {
		$this->model->noSix();
	}
	
	public function noSeven() {
		$this->model->noSeven();
	}
	
	public function noEight() {
		$this->model->noEight();
	}
	
	public function noNine() {
		$this->model->noNine();
	}
	
	public function clearScreen() {
		$this->model->clearScreen();
	}
	
	public function defaultActions() {
		#$this->model->sesStart();
	}
}
?>