<?php
print "Lesson 4.9: GLOBAL VARIABLES <br><br>";

$somvar = 15;

function addit(){
GLOBAL $somvar;
$somvar++;
print "Somvar is $somvar";
}

addit ();
?>