<?php
echo "CASE SENSITIVITIES";
/* This is where I see the result of whitespaces in PHP.
    It is said that it is generally useless */

$four1 = 2 + 2; //single spaces
$four2   =   2   +   2   ; //spaces and tabs
$four3 =
2+
2; //multiple lines

print "2+2 = $four1 <br>";
print "2+2 = $four2 <br>";
print "2+2 = $four3 <br>";

//everything works
print "<br>";
//This is where I test PHP's case sensitiveness 

$capital = 67;
print "Variable capital is $capital <br>";
print "Variable caPiTaL is $CaPiTal <br>"; //this brings an error since $CaPiTaL is not the same as $capital, and is not initiated


?>