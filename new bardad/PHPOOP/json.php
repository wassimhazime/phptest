<?php

//1- simple array
$names=  array('hussein','ahmed','jasim');

//echo print_r($names);
//echo json_encode($names);

//2 complex arra
$items=  array('name'=>'ahmed','age'=>26,'birth'=>'iraq');
//echo json_encode($items);


//- 3 class
class info{
    public $name;
    public $age;
    public $brith;
}

$namesclass=new info();
$namesclass->age=26;
$namesclass->name="hussein alrubaye";
$namesclass->brith="iraq";
echo json_encode($namesclass);
?>

