<?php
class Person
{
	private $_name;
	private $_age;
	
	function __construct($name, $age)
	{
		if (!is_int($age))
		{
			throw new Exception("Cannot assign non integer value to	integer field, 'Age'");
		}
		$this->_age = $age;
		$this->_name = $name;
	}
	
	public function setAge($age)
	{
		if (!is_int($age))
		{
			throw new Exception("Cannot assign non integer value to
			integer field, 'Age'");
		}
		$this->_age = $age;
	}
	protected function thnPensiun()
	{
		return 67 - $this->_age;
	}
}

$person = new Person("Wes",90);
$person->setAge(23);
echo $person->thnPensiun();


?>
