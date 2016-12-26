
<?php
class Rumah
{
    //public $public = 'Public';
    protected $protected = 'Protected';
    //public  $private = 2;

    protected function hitung(){
        echo $this->private*3;
    }

}

class baru extends Rumah{

    protected function hitungX(){
        echo $this->protected;
    }
}
//public
//protected
//private

$objBaru = new baru;
$objBaru->hitungX();

//$objRumah = new Rumah;

//$objRumah->hitung();