<?php
class Induk
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }

    protected function proPrint(){
        echo $this->protected.'<br>';
    }

    protected function kali($a, $b){
        $c = $a * $b;

        return $c;
    }
}

class Anak extends Induk
{
    // We can redeclare the public and protected method, but not private
    public $public = 'Public2';
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }

    protected function kali($a){
        $c = $a * 10;

        return $c;
    }

    function CetakproPrint()
    {
        //$class = New Induk();
        Induk::proPrint();
        
        $coba = new Induk();

        $hasil = 2 * $this->kali(2,1,3);

        return $hasil;

        //echo Induk::protected;
    }
}

$obj2 = new Anak();

//$obj2->proPrint();
echo $obj2->CetakproPrint();
//echo $obj2->public; // Works
//echo $obj2->protected; // Fatal Error
//echo $obj2->private; // Undefined
//$obj2->printHello(); // Shows Public2, Protected2, Undefined


?>