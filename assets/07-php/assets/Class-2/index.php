<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Class-2</title>
    <style>
        body{
            font-size: 20px;
            margin-left: 100px;
        }
    </style>
</head>
<body>


<pre>
<u><i>PHP Operators Name	</i></u>
1.      Arithmetic operators 	+ , - , * , /, % **
2.      Assignment operators 	= , += , -= , *= /=  , %=
3.      Comparison operators 	==, ===, != , !== , >, <, >=, <=, <=>
4.      Increment/Decrement operators 	++$ , $++ , --$, $--,
5.      Logical operators   	&& / and, || / or, !
6.      String operators 	. , .=
7.      Array operators  	+  , ==  , !==
8.      Conditional assignment operators	?: , ??
</pre>

<pre>
4. Increment/Decrement operators
++$	Pre-increment
$++	Post-increment
--$	Pre-decrement
$--	Post-decrement

</pre>

<?php 
$w= 5;
$x= 5;
$y = 5;
$z = 5;

// ++$	Pre-increment
$c = ++$w;
echo " h = 5 ++i Pre-Increment = ";
echo "$c <br>";

// $++	Post-increment
$d = $x++;
echo " i = 5 i++ Post-Increment = ";
echo "$d <br>";

// --$	Pre-decrement
$e = $y--;
echo " k = 5 --i Pre-decrement = ";
echo "$e <br>";

// $--	Post-decrement
$l = --$z;
echo " l = 5 i-- Post-decrement = ";
echo "$l <br>";

?>

<Pre>
<u> 5. Logical operators  </u>  
    &&	And
    and	And
    ||	Or
    or	Or
    or	Or
    or	Or
    xor	Xor
    !	Not
</Pre>

<?php 

    // &&	And
    $t = true;
    $f = false;

    $and_tf = $t && $f ;
        echo "t && f  = ";
    var_dump($and_tf); 

    echo "<br>";
    // and	And
  echo "<br>";
    $and_tf = $t and $f ;
        echo "t and f = ";
    var_dump($and_tf); echo "[এখানে and এর Precedence (অগ্রাধিকার)  ❌ নিম্ন (Low) তাই আগেই এসাইন Value  True ] ";
    echo "<br>";

    echo "<br>";
    // ||	Or

    $or_tf = $t ||$f ;
        echo "t || f = ";
    var_dump($or_tf);

    echo "<br>";
    // or	Or

    $orr_tf = $t or $f ;
        echo "t or f = ";
    var_dump($orr_tf);
    
     echo "<br>";
    // xor	Xor
  
    $xor_tf = $t or $f ;
        echo "t xor f = ";
    var_dump($xor_tf);
    // !	Not
    echo "<br>";
    $not_tf = ! $t ;
        echo "t Not f = ";
    var_dump($not_tf);
    // !	Not
    echo "<br>";
    $not_tf = ! $f ;
        echo "t Not f = ";
    var_dump($not_tf);
    echo "<br>";
    echo "<br>";
    var_dump($t && $f );  echo "<br>";
    var_dump($t || $f );   echo "<br>";
    var_dump(! $t );   echo "<br>";
    var_dump(! $f );  echo "<br>";

?>

<?php 

?>

<pre>
<u>5. Comparison operators </u>
    ==	Equal
    ===	Identical
    !=	Not equal
    <>	Not equal
    !==	Not identical
    >	Greater  than
    <	Less than
    >=	Greater than or equal to
    <=	Less than or equal to
    <=>	Spaceship
</pre>

<?php 
// ==	Equal
$n1 = 10;
$n2 = "10";
$n3 = 5;


$equal = $n1 == $n2; 
echo " 'n1 = ' . $n1.  ' n2 ='. $n2 . 'equal == ' ";
var_dump($equal);

echo " <br/>";

// !=	Not equal
// <>	Not equal
$notEqual = $n1 != $n2; 
echo " 'n1 = ' . $n1.  ' n2 ='. $n2 . 'notEqual != ' ";
var_dump($notEqual);

echo " <br/>";
// ===	Identical

$Identical = $n1 == $n2;
echo " 'n1 = ' . $n1.  ' n2 ='. $n2 . 'Identical === ' ";
var_dump( $Identical);
echo " <br/>";
// !==	Notidentical

$Notidentical = $n1 !== $n2;
echo " 'n1 = ' . $n1.  ' n2 ='. $n2 . 'Notidentical !==	 ' ";
var_dump($Identical);

echo " <br/>";
// >	Greater  than
$LessThan = $n1 > $n3;
echo " 'n1 = ' . $n1.  ' n3 ='. $n3 . '	Greater  than >	 ' ";
var_dump($LessThan);

echo " <br/>";
// <	Less   than
$GreaterThan = $n1 < $n3;
echo " 'n1 = ' . $n1.  ' n3 ='. $n3 . '	Less   than < ' ";
var_dump($GreaterThan);

echo " <br/>";
// >=	Greater than or equal to
$GreaterEqual = $n1 >= $n3;
echo " 'n1 = ' . $n1.  ' n3 ='. $n3 . '	Greater than or equal to	>= ' ";
var_dump( $GreaterEqual);

echo " <br/>";
// <=	Less than or equal to
$LessEqual = $n1 <=$n3;
echo " 'n1 = ' . $n1.  ' n3 ='. $n3 . '	Less than or equal to	<= ' ";
var_dump($LessEqual);
// <=>	Spaceship
  
?>

</body>
</html>