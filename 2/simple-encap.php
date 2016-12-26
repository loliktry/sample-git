
<?php
/**
 * Define MyClass
 */
class MyClass
{
    var $public = 'Public';
    var $protected = 'Protected';
    var $private = "Private";

    public function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }

}
class MyClass2 extends MyClass
{
   
    public function printHello()
    {
        echo $this->public."<br>";
        echo $this->protected."<br>";
        echo $this->private."<br>";
    }
}


$obj2 = new MyClass2();
$obj2->printHello()."<br>";



/*$obj2 = new MyClass2();
//echo $obj2->public."<br><br>"; // Works
//$obj2->showProtected;
//echo $obj2->protected."<br>"; // Fatal Error
//echo $obj2->private."<br><br>"; // Undefined
*/
 // Shows Public, Protected2, Undefined
/*
$obj1 = new myClass;
//echo $obj1->private;
$obj1->hitung();*/

?>
