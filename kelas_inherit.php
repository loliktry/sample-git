<?php

require_once 'kelas_Book.php';
require_once 'kelas_DVD.php';

$product1 = new kelas_Book('Book', 'PHP Object-Oriented Solutions',300);
$product2 = new kelas_DVD('DVD', 'Atonement');
echo '<p>$product1 is a ' . $product1->getProductType();
echo ' called "' . $product1->getTitle() . '"</p>';
echo '<p>$product2 is a ' . $product2->getProductType();
echo ' called "' . $product2->getTitle() . '"</p>';
