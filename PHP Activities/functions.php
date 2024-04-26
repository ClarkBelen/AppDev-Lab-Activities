<?php
#php functions


function message()
{
    echo "My First user defined function <br/><br/>";
}

message();


## PHP function arguments

function studname($name)
{
    echo "$name <br/>";
}

studname("Juan Dela Cruz");
studname("Peter Simon");
studname("Jack Cruz");
studname("Jane Doe");
echo "<br/>";


##PHP Functions with Returning values

function addthis($num1, $num2, $num3)
{
    $sumis = $num1 + $num2 + $num3;
    return $sumis;
}
echo addthis(5, 2, 5);
