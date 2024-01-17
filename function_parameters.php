<?php
print "Lesson 4.8<br><br>";
//multiply a  =value by 10 and return it to the caller


function multiply($value){
    $value = $value * 10;
    return $value;
}

$retval = multiply (10);
print "Return value is $retval\n";

?>