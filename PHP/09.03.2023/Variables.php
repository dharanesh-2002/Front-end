<?php
//Assigned to variable

$name="DHARANESH";
$emp_name=&$name;
$val=(10+12);

echo $emp_name,"\n";
echo $val;
echo "<br>";
//Difference b/w to unintialized variables & intialized variables
echo $check ? "true\n" : "false\n"; //false
echo $val ? "true\n" : "false\n";//true
echo "<br>";
//PREDEFINED VARIALES
//$GLOBALS

function employee(){
    $Company="Aspire System";
    echo "CURRENT SCOPE :" ,$Company,"<br>";
    echo "GLOBAL SCOPE :", $GLOBALS["Company"];

}
$Company = "ASPIRE SYSTEMS";
employee();
?>