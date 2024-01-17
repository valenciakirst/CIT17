<?php


print "Lesson 4.6 <br><br>";
$channel = <<<_XML_

<channel>
<title>What's For Dinner</title>
<link>http://menu.example.com/<link>
<description>Choose what to eat tonight.</description>
</channel>
_XML_;


echo <<<END
This uses the "here document" syntax to output 
multiple lines with variable interpolation. Note
that the here document terminator must appear on a 
line with just a semicolon, no exttra whitespace!<br />
END;

print $channel;


//it works yey
?>