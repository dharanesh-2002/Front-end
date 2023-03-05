<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
</head>

<body>

<?PHP
    $a_bool=true;
    $a_string="dharan";
    $a_int=123;

    echo gettype($a_bool),'\n';
    echo get_debug_type($a_string);

    if(is_int($a_int)){
        $a_int +=4;
    }
    var_dump($a_int);

    //BOOL Converting
    var_dump((bool) "");  
    var_dump((bool) "0");       
    var_dump((bool) 1);         
    var_dump((bool) -2);        
    var_dump((bool) "foo");     
    var_dump((bool) 2.3e5);     
    var_dump((bool) array(12)); 
    var_dump((bool) array());   
    var_dump((bool) "false");


    //INT Converting
    function foo($value): int {
        return $value; 
      }
      
      var_dump(foo(9.1)); 
      var_dump(foo(1.9)); 
      var_dump(foo(5)); 
      
      var_dump((int)88.9); 
      var_dump(intval(9.1)); 
      var_dump((int)"dharan");//zero

      //String
      echo 'Hi \\ This is dharanesh \n no new line will get',"\n";

      echo <<<END
                a
            d
        c
END;

    echo "\n";
    $values = [<<<END
    a
        b
            c
    END, 'd e f'];
    var_dump($values);

    
?>
   
</body>

</html>