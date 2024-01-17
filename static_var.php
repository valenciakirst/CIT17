<?php

print "Lesson 4.10: STATIC VARIABLES<br><br>";

function keep_track() {

STATIC $count = 0;

$count++;
print $count;
print "<br>";

}

keep_track ();
keep_track ();
keep_track ();


?>