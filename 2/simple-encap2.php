
<?php
/**
 * Define MyClass
 */
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    public function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}


/**
 * Define MyClass2
 */

class MyClass2 extends MyClass
{
    //We can redeclare the public and protected method, but not private
    /*protected $protected = 'Protected2';
    public $public = 'Public3';*/

    

    function printHello()
    {
        echo $this->public."<br>";
        echo $this->protected."<br>";
        echo $this->private."<br>";
    }
}
echo "<br><br><br>";
echo "myClass2()<br>";
$obj2 = new MyClass2();
echo $obj2->public."<br><br>"; // Works
//echo $obj2->protected."<br>"; // Fatal Error
//echo $obj2->private."<br><br>"; // Undefined
$obj2->printHello()."<br>"; // Shows Public, Protected2, Undefined

?>
