<?php
class mahasiswa {
    private $bar = 'secret';
    private $bar1 = 'secret1';
}

$obj = new mahasiswa;

      $cekKelas = new ReflectionClass(get_class($obj));
      $secret = $cekKelas->getProperty('bar');
      $secret->setAccessible(true);
      echo $secret->getValue($obj);
      $secret1 = $cekKelas->getProperty('bar1');
      $secret1->setAccessible(true);
      echo $secret1->getValue($obj);


