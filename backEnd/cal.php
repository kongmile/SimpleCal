<?php
	header("Content-Type: text/plain;charset=utf-8"); 

	class Cal{
		public $num1;
		public $num2;

		public function __construct($num1, $num2){
			$this->num1 = $num1;
			$this->num2 = $num2;
		}

		public function plus(){
			echo $this->num1 + $this->num2;
		}

		public function subtract(){
			echo $this->num1 - $this->num2;
		}

		public function multiply(){
			echo $this->num1 * $this->num2;
		}

		public function divide(){
			if($this->num2 != 0){
				echo $this->num1 / $this->num2;
			}else{
				echo "除数不能为0";
			}
		}

	}

$cal = new Cal($_POST['num1'], $_POST['num2']);

switch ($_POST['op']) {
		case 'j':
			$cal->plus();	
			break;
		case '-':
			$cal->subtract();
			break;
		case '*':
			$cal->multiply();
			break;
		case '/':
			$cal->divide();
			break;
		default:
			echo "参数错误";
			break;
	}