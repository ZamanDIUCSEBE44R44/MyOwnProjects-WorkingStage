<?php 
class Person{
	// This is Property
	public $name; 
	public $age;
	//This is Method
	public function personName(){
		echo "Person Name is ".$this->name."<br />";
	}
	public function personAge($value){
		echo "Person Age is ".$this->age=$value;
	}
}
$personOne = new Person;//Object
$personOne->name="Syed Zaman Mostafiz";
$personOne->personName();
$personOne->personAge("18");

?>