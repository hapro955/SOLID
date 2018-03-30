<?php
class student{
	protected $studentName;
	protected $studentAge;

	function __construct($name,$age){
		$this->studentAge=$age;
		$this->studentName=$name;
	}
}

class studentName extends student{
	public function setStudentName($name){
		$this->studentName=$name;
	}
	public function getStudentName(){
		return $this->studentName;
	}
}

class studentAge extends student{
	
}
?>