<?php
//Super Globals
//$GLOBALS
$a = 5;
$b = 10;
function add()
{
    $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
    echo "Inside function:", $GLOBALS['c'];
}
add();
echo "<br>";
echo "Outside function:", $GLOBALS['c'];

//$_SERVER
// echo "<pre>";
// print_r($_SERVER); //Get Server Details.
echo "<br>";
echo $_SERVER['PHP_SELF'];

$_SERVER['http://www.example.com/test.php?id=3'];
$id=$_GET['id'];
echo "<br> GET ID=",$id;

//Variable Scope
$a = 1;
$b = 2;

function Sum()
{
    global $a, $b; //global Keyword

    $b = $a + $b;
}

Sum();
echo $b;
echo "<br>";
//Static
function call()
{
    static $a = 10;
    echo $a, "\n =>";
    $a++;
}
for ($i = 0; $i < 3; $i++) {
    call();
}
echo "<br> Class ";
//class

class Increment
{
    public static function count()
    {
        static $count = 0;
        $count++;
        echo "The current class",__CLASS__,"<br>";
        return $count;
    }
}
class check extends Increment
{
}
var_dump(Increment::count());
var_dump(check::count()); //static is remains same while inheritance.
echo "<br>";

//Variables Variables
$num="Hi!!! I'm Dharanesh";
$num1="num";
echo $$num1;
echo "<br>";

?>