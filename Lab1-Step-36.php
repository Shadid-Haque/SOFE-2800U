<?php
$a1 = $_POST ["a"];
$b1 = $_POST ["b"];
$c1 = $_POST ["c"];
$d1 = $_POST ["d"];
$e1 = $_POST ["e"];


echo "<p>Greetings $a1 $b1</p>";
echo "<p>Your User name is: $c1 and your password is: $d1</p>";
// echo "<p>your cellphone number is: $e1 </P>";

// printing the cellphone number in a apropiate format

echo "<p>your cellphone number is: ";
echo substr($e1,0,3)."-";
echo substr($e1,3,3)."-"; 
echo substr($e1,6);

echo "<p><hr color='darkblue' size='4'>End of Part3</p>";
?>
