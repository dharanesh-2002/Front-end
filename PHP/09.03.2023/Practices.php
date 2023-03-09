<?php
//Call backs
function callFunction($callBack)
{
    $callBack();
}
function Greet(){
    echo "Hi, I am Dharanesh";
    echo "<br>";
}
callFunction('Greet');
//Call a callFunction() function with greet() function as a call back.
class employee{
    public function greet(){
        echo "Hi, I'm in class";
    }
}
$obj= new employee;
callFunction([$obj,'Greet']);
echo "<br>";
//Iterables
$array =[1,2,3];
 
foreach($array as $value){
    echo "Iterables>Array";
    echo $value;
    echo "<br>";
}

function gen() {
    echo "Generator function";
    echo "<br>";
    yield 1;
    yield 2;
    yield 3;
  }
  
  foreach (gen() as $value) {
    echo $value . "\n";
  }

  //Type Delaration in pass-by value
  function check(array &$check){
    $check=2;
  }
  echo "<br>", "Type Declaration","<br>";
  $arr = [];
  var_dump($arr);
  check($arr);
  var_dump($arr);
  //check($arr); //Shows an error.
  echo "<br>";
  echo "Type Juggling","\n";

  //Type Junggling
  $var=10;
  echo gettype($var),"\n";
  $var="Dharan";
  echo gettype($var),"\n";
 
?>