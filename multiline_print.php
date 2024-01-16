<?php 

#First Example

print <<<END
This uses the "here document" ssyntax to output
multiple lines with variable interpolation. Note
that the here document terminator must appear on a 
line with just a semicolon no extra whitespace!
END;

#Second Example

print "This spans
multiple lines. The newlines will be
output as well <br>";

print "<br>";

#Third Example
/*The first two examples prints as 
paragraphs and not new lines */

print "This is a new paragraph. <br>
With several new lines <br>
that does not turn into a single <br>
continuous paragraph."
?>