<?php 

$name = "laili septiandi";
$name = null;
$age = null;

echo "Nama : ";
echo $name;
echo "\n";

echo "Age : ";  
echo $age;
echo "\n";


// fungsi is_null sebagai pengecekan data 


// $name = "Kang jamil";
echo "Is Name Null ? : ";
var_dump(is_null($name));
echo "\n";

// delete variable
unset($name);
// var_dump($name);

// isset yaitu mengecek data itu ada atau tidak
$name = "laili tamvan";
var_dump(isset($name));
?>