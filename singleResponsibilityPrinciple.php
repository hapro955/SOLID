<?php
class student{
	protected $studentName;
	protected $studentAge;

	function __construct($name,$age){
		$this->studentAge=$age;
		$this->studentName=$name;
	}
}
?>