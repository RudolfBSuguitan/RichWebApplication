<?php
class Model {
	public $num;
	public $sesNum;
	public $no = '';
	
	public function noZero() {
		$this->num = 0;
		$_SESSION ['no'] .= $this->num;
		$this->sesNum = $_SESSION ['no'];
	}
	
	public function noOne() {
		$this->num = 1;
		$_SESSION ["no"] .= $this->num;
		$this->sesNum = $_SESSION ["no"];
	}
	
	public function noTwo() {
		$this->num = 2;
		$_SESSION ["no"] .= $this->num;
		$this->sesNum = $_SESSION ["no"];
	}
	
	public function noThree() {
		$this->num = 3;
		$_SESSION ["no"] .= $this->num;
		$this->sesNum = $_SESSION ["no"];
	}
	
	public function noFour() {
		$this->num = 4;
		$_SESSION ["no"] .= $this->num;
		$this->sesNum = $_SESSION ["no"];
	}
	
	public function noFive() {
		$this->num = 5;
		$_SESSION ["no"] .= $this->num;
		$this->sesNum = $_SESSION ["no"];
	}
	
	public function noSix() {
		$this->num = 6;
		$_SESSION ["no"] .= $this->num;
		$this->sesNum = $_SESSION ["no"];
	}
	
	public function noSeven() {
		$this->num = 7;
		$_SESSION ["no"] .= $this->num;
		$this->sesNum = $_SESSION ["no"];
	}
	
	public function noEight() {
		$this->num = 8;
		$_SESSION ["no"] .= $this->num;
		$this->sesNum = $_SESSION ["no"];
	}
	
	public function noNine() {
		$this->num = 9;
		$_SESSION ["no"] .= $this->num;
		$this->sesNum = $_SESSION ["no"];
	}
	
	public function addNum() {
		$_SESSION ["no2"]=$_SESSION ["no"];
		$this->clearScreen();
		$this->sesNum = "+";
		$_SESSION['addNum'] = "addNum";
	}
	
	public function equalNum() {
		$this->sesNum = $_SESSION ["no2"] + $_SESSION ["no"];
	}
	
	public function clearScreen() {
		$this->num = '';
		if(isset($this->num))
			$_SESSION ['no'] = $this->num;
		$this->sesNum = $_SESSION ["no"];
		#session_unset();
	}
}
?>