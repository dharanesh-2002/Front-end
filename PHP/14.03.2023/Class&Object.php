<?php
// Readonly Properties
// class Test
// {
//     public readonly string $prop;

//     public function __construct(string $prop)
//     {
//         $this->prop = $prop;
//     }
// }

// $test = new Test("Check");
// var_dump($test->$prop);
class User
{
    public $username;
}

$user = new User();
var_dump($user->username);
echo "<br>";
//Class Constants
class Check
{
    const word ="Dharan";
    public function disp(){
        echo "<br>";
        echo "1->",self::word;
    }
}
//Default visibility of constant is global.
$display="Check";
echo $display::word;

$obj=new Check;
echo $obj->disp();

// Class constant visibility modifiers
class visible{
    public const prefix="PUBLIC MODIFIER";
    private const suffix="PRIVATE MODIFIER";
}
echo "<br>";
echo visible::prefix;
echo visible::suffix;
?>