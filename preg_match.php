

<?php
   $line = "Vi is the greatest word processor ever created!";
   // perform a case-Insensitive search for the word "Vi"
   
   if (preg_match("/\bVi\b/i", $line, $match)) :
      print "Match found!";
      endif;

   echo "<br>";   
   echo $match[0];   


   // preg_match() returns 1 if the pattern matches given subject, 0 if it does not, or FALSE if an error occurred.
?>

<?php
/*

Since in our example a match is found, the question and answer will be echoed. If you change the word "chicken" in either one of the instances where it is found, there will no longer be a match, and the statements will not be echoed.

Metacharacters are understandably more involved than their literal counterparts, but with a little study, they can be interpreted. Let's begin with an easy subject: character classes.

Character classes specify which characters are acceptable in a pattern. [a-z], [A-B] and [0-9] are all examples of character classes covering a wide range of characters, but you can build your own by enclosing the acceptable characters in square brackets. Examples: [dgefgh] matches d, g, e, f, etc. and [l-p] matches l, m, n, o & p.

Negated character classes specify which characters are not acceptable in a pattern. These classes are in square brackets, but begin with ^. Examples: [^dgefgh] means that d, g, e, f, g & h are not acceptable and [^l-p] means that l, m, n, o & p are not acceptable.

And now let's take a brief look at the basic possibilities that regular expressions allow.

Syntax	Example	Will Match	Description
a-z	[a-z]	a, b, c, d, etc.	Represents All & Any Number of Lowercase Alphabet Characters
A-Z	[A-Z]	A, B, C, etc.	Represents All & Any Number of Uppercase Alphabet Characters
0-9	[0-9]	0, 1, 2, etc.	Represents All & Any Number of Numeric Characters
a-zA-Z0-9	[a-zA-Z0-9]	a, B, 7, etc.	Represents All & Any Number of Alphanumeric Characters
^	^cat	cat	Indicates That Pattern Must Match Beginning of String
$	cat$	cat	Indicates That Pattern Must Match End of String
^$	^cat$		Indicates That Pattern Must Match Beginning & End of String
|	cat|dog		Indicates An Alternative Pattern (Means "Or")
.	c.t	cat, cot, cut, c8t etc.	Represents Any Single Character Except Newline
\i	\icat	cat, CAT, cAt, CAt, etc.	Represents Case Insensitivity
\b	\bcat	cat (not cattail, cats, etc.)	Represents "Word Boundary" (No Additional Characters)
\d	c\dt	c0t, c1t, c2t, c3t, c4t, c5t etc.	Represents Any Single Digit (0-9)
\D	c\Dt	cat, cot, cut, etc.	Represents Any Single Character Except Digit (a-z)
\w	c\wt	cat, c9t, c_t, etc.	Represents Any Letter, Digit & Underscore
\W	c\Wt	c$t, c@t, c&t, etc.	Represents Any Character Except Word Characters
\s	c\st	c t	Represents Any Whitespace Such As a Space, Newline or Tab
\S	c\St	cat, c9t, c_t, etc.	Represents Any Character Except a Whitespace Character
\	c\.t	c.t	Escapes Special Characters So They Can Be Used In Pattern to Represent Themselves
()	(cat)		Used to Group Options Together By Capturing Subpatterns
[]	[abcde]		Used to Group Options Together By Forming Classes
+	cat+		Means That There Should Be One or More Occurrence of the Preceding Character or Expression
*	cat*		Means That There Should Be Zero or More Occurrence of the Preceding Character or Expression
?	cat?		Means That There Should Be Zero or One Occurrence of the Preceding Character or Expression
{}	cat{2}		Means That There Should Be A Certain Number (2) of Occurrences of the Preceding Character or Expression
{}	cat{5,7}		Means That There Should Be A Certain Number (Between 5 & 7) of Occurrences of the Preceding Character or Expression
Now that you have all of that memorized, let's jump into our long-awaited example, where we will determine whether or not an email address uses the correct syntax. Consider the following by looking up each symbol on the chart above, and see what you make of it.

/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/

As you can see, this regular expression defines a series of rules that express an acceptable pattern to be followed in order to validate the proper syntax of an email address. It can be used in the following manner:




<?php

 $email = "test@example.org";
  $expression = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  if (preg_match($expression, $email)) {
    echo "Email format is correct!";
  } else {
    echo "Email format is NOT correct!";
  }
  ?>




  Because /./ means one character, not all. You should use a quantifier:

* means 0 or more characters
+ means 1 or more characters
? means 0 or 1 character

*/

?>