<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class -1 </title>
    <style>
        body{
            font-size: 20px;
            margin-left: 100px;
        }
    </style>
</head>
<body>
    <?php 


// Server Setup
// Basic Syntax
// Variable, Function, Method, Class লেখার নিয়ম
// Constant 
// statement VS expression 
// Data Type
// Operators  Arithmetic,  Assignment



echo "HI, Future Developer <br>";
// Variable
$name = "Raihan Ali <br>";
echo $name;

// Best Practice

// $my_name  = snake_case (variable / function)
// $myName   = camelCase (Method)
// $myName   = PascalCase (Class)

// নম্বার দিয়ে ভ্যারিয়বল নাম শুরু হবে না
// রিজার্ভ কিওয়ার্ড ভ্যারিয়বল নাম শুরু হবে না

$name = "Raihan <br>";
echo $name;



// Constant  যার ভ্যালু পরিবর্তন করার প্রয়োজন হয় না যেমন 'পাই';

define("constant_name", 3.333);
define("PI", 3.145);

echo PI ;
echo '<br>' ;

$x = 10; // সম্পর্ণ লাইনটি statement  $x ও 10  হচ্ছে expression 


// Data Type 
/* 
    Scalar 
        String //
        Integer // 
        Float
        Boolean
    Compound Types
        array
        object
    Spacial Types
        null
        resource 
*/

$age = 25;
$price = 40.53; // is_int()
$myName = "Raihan";
$is_admin = false;
$is_user = true;
$fruits = ["mango", "Banana", 27];

echo $fruits[0];
echo $fruits[1];
echo $fruits[2];

echo "<br>";

// Object
// $user1 = new User ();
// $user2 = new User ();
// $variable = Null; // ডিফল্ট ভ্যালু ক্ষেত্রে
// $file = fopen("test.txt","r");

echo "is_int($price)";
echo "<br>";
echo "<h2> Operators </h2>";
?>

<pre>
<u><i>1. Arithmetic Operators;</i></u>
    +	Addition
    -	Subtraction
    *	Multiplication
    /	Division
    %	Modulus
    **	Exponentiation
</pre>

<?php 

$a = 8;
$b = 3;

$Addition = $a + $b ;
$Subtraction = $a - $b ;
$Multiplication = $a * $b ;
$Division = $a / $b ;
$Modulus = $a % $b ;
$Exponentiation = $a ** $b ;

echo "Addition + = $Addition <br>";
echo "Subtraction - = $Subtraction  <br>";
echo "Multiplication * = $Multiplication <br>";
echo "Division / = $Division <br>";
echo "Modulus % = $Modulus <br>";
echo "Exponentiation ** = $Exponentiation <br>";

?>
<pre>
<u><i> 2. Assignment Operators</i></u>
1 = Assignment
2 += Addition Assignment
3 -= Subtraction Assignment
4 *= Multiplication Assignment
5 /= Division Assignment
6 %= Modulus Assignment
</pre>
<?php 

echo "<u> 2. Assignment Operators </u> <br>";
$aa = 5;

echo "Assignment : aa = $aa <br>";

$aa += 2;
echo "Addition Assignment : aa+2 = $aa <br>";
$aa -= 2;
echo "Subtraction Assignment : aa-2 = $aa <br>";
$aa *= 2;
echo "Multiplication Assignment : aa2 = $aa <br>";
$aa /= 2;
echo "Division Assignment : dd/2 = $aa <br>";
$aa %= 2;
echo "Modulus Assignment : ee%2 = $aa <br>";
$aa**= 2;
echo "Subtraction Assignment : ff**2 = $aa <br>";



?>
</body>
</html>