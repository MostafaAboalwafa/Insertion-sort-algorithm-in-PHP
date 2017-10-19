<?php

//testing

require 'InsertionSort.php';
$numbers =[1,54,6,4,3,7,8,34,764,20,32,56565,23,15,54,65,4,2332,435,6565,3434,23];
$sorted = [];


$x = new InsertionSort($numbers);
echo $x->getGreatestNumber();