<?php
//Constants --> Magic Constants.

echo "The current line ", __LINE__, "<br>";
echo "The current file ", __FILE__, "<br>";
echo "The directory of file ", __DIR__, "<br>";

function functionCheck()
{
    echo "The function name is ", __FUNCTION__, "<br>";
}
functionCheck();

class Increment
{
    public static function count()
    {
        static $count = 0;
        $count++;
        echo "The current class", __CLASS__, "<br>";
        return $count;
    }
}
class check extends Increment
{
}
var_dump(Increment::count());
var_dump(check::count());
//Trait keyword

trait Clarify
{
    public function print()
    {
        echo "The current trait is ", __TRAIT__, "<br>";
    }
}
class vaildation
{
    use Clarify;
}
$obj = new vaildation;
$obj->print();

//Function Expression
function num(){
    return 220;
}
$store=num();
echo "Function Expression ",$store,"<br>";

?>