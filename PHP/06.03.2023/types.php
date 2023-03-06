<?php
//Numeric String
$foo = "10.0 pigs " + 1.0; //Notice
echo $foo, "\n";
echo "<br>";
$num = 4 + "10.2 Little Piggies"; //Warning
echo $num, "\n";
echo "<br>";
$call = "don" + 1;
echo "<br>";
echo $call, "\n";

//Array
$array = [
    1 => "bar",
    2 => "foo",
];
var_dump($array);
echo "<br>";
//Type Casting

$array = [
    1 => 'a',
    "1" => 'b',
    1.5 => 'c',
    true => 'd'
];
var_dump($array);
echo "<br>";
///indexed array without key
$array = array("Aspire", "Systems", "SIPCOT");
var_dump($array);
echo "<br>";
//Accessing an array with square brackets
$array = array("Aspire", "Systems", "SIPCOT");
var_dump($array[1]);
echo "<br>";
function getArray()
{
    return array(1, 2, 3);
}

$secondElement = getArray()[1];
echo $secondElement;
echo "<br>";
unset($secondElement); // Destory the element


//Array Destructing
$array = ["Dharan", "21", "INT00810"];
[$name, $age, $id] = $array;
echo $name, " ";
echo $id;
echo "<br>";
$multi_arr = [
    ["Aspire", "Dharan"],
    ["Aspire", "Dharanesh"],
];
foreach ($multi_arr as [$company, $name]) {
    echo $company, "  ", $name;
    echo "<br>";
}

//Array Swaping
$a = 1;
$b = 2;
[$b, $a] = [$a, $b];
echo $a;
echo " ", $b;
echo "<br>";

//Array Unpacking
$arr = [1, 2, 3];
$arr1 = [...$arr, 4, 5];
var_dump($arr);
echo "<br>";
var_dump($arr1);

//Unpack with duplicate key => Unpacking a string is not supported
// $arr2 = ["a" => 1];
// $arr3 = ["a" => 2];
// $arr4 = ["a" => 3, ...$arr2, ...$arr3];
// echo "<br>";
// var_dump($arr4);

//Objects
class Company
{
    function details(){
        $name = "Dharanesh";
        $company ="Aspire Systems";
        echo "<br>";
        echo "I am $name, currently working at $company";
    }
}
$call= new Company;
$call->details();

//Converting to object
$val=array(1=>"Don",2=>"King");
$obj= (object) $val;
echo "<br>";
var_dump($val);
echo "<br>";
var_dump($obj);
echo "<br>";

?>