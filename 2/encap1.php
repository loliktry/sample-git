<?php
/**
 * Define MyClass
 */

class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public.'<br>';
        echo $this->protected.'<br>';
        echo $this->private.'<br>';
    }
    
}

$obj = new MyClass();
echo $obj->public; // Works
echo $obj->protected; // Fatal Error
echo $obj->private; // Fatal Error

$obj->printHello(); // Shows Public, Protected and Private
$obj->proPrint();