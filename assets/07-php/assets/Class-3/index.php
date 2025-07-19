<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class - 3</title>
</head>
<body style="font-size: 20px;">
    <!-- PHP Part 03 _ Null Coalescing, Ternary, Spaceship Operator -->

<pre>
   <u><i> 6.String operators : . Concatenation  </i></u> 
</pre>

<?php 

//  . Concatenation
$firstName = "Raihan";
$lastName = "Ali";

$fullName = $firstName . " ". $lastName;

echo "$fullName";

echo "<br>";

$product = "Laptop";
$price = 85000 ;

echo "Product Name:-" . " ".  $product. ", Product Price:-" . " ". $price. " ". "BDT";
echo "<br>";
?>
<pre>
   <u><i> 6.String operators : .= Concatenation assignment</i></u> 
</pre>

<?php

$text = "";
$items = ["Apple", "Banana", "Cherry"];

foreach($items as $item) {
    $text .= $item . ", ";
}

echo $text;  // Output: Apple, Banana, Cherry,
echo "<br>";
echo "<br>";

//     
echo "<u> 3.  Comparison operator :-  <=> Spaceship </u> <br> <br>";
$spaceship1 = 3 <=> 5 ;
$spaceship2 = 5 <=> 5;
$spaceship3 = 5 <=> 3;
echo "3 <=> 5  ", $spaceship1 , "<br>";
echo "5 <=> 5  ", $spaceship2  , "<br>";
echo "5 <=> 3  ", $spaceship3  , "<br>";

?>
<pre>
<u><i>8. Conditional assignment operators: 1 ?: Ternary </i></u>
এক লাইনে if...else লেখার সংক্ষিপ্ত পদ্ধতি।
conditon ? "true" : "false";

$score_a = 90;
$result_r = $score_a > 80 ? "A+" : "Not A+";

</pre>

<?php 
$score_a = 90;
$result_r = $score_a > 80 ? "A+" : "Not A+";

echo "Result: ". $result_r;

?>

<pre>
<u><i>8. Conditional assignment operators: 2 ?? Null coalescing </i></u>

    $customer = "Raihan";
    $result = $customer ?? "Visitor";
    echo "Customer Name: ". ($result) ; 
</pre>

<?php 
 
echo "Conditional assignment operator: ?? Null coalescing 

<br>";

$customer = "Raihan";
$result = $customer ?? "Visitor";
echo "Customer Name: ". ($result) ;

?>
<pre>
<u>Conditional Statements : if else // যদি শর্ত সত্য হয়, একটি কোড ব্লক চালায়; অন্যথায় আরেকটি চালায়। </u>
    if (condition) {
    } else { 
    }

</pre>

<?php 
$score = 40;
    if ($score > 80){
        echo " A+" ;
    }else {
        echo "Result:- ". "Not A+";
    }
?>

<pre>
    <u><i>Conditional Statements:  if () elseif{} {}else {}  // একাধিক শর্ত চেক করে, যেটা সত্য হয় সেটি চালায়।</i></u>
</pre>


<?php 

$score = 80;
    if ($score >= 80){
        echo " Result :  A+" ;
    }elseif( $score >= 70){
        echo " Result :  A";
    }elseif( $score >= 60){
        echo " Result :  A-";
    }elseif( $score >= 50){
        echo " Result :  B";
    }elseif( $score >= 40){
        echo " Result :  C";
    }elseif( $score >= 33){
        echo " Result :  D";
    }
    else {
        echo "Your Result : Fail";
    }
?>
<pre>
    <u><i>Conditional Statements:  switch //একাধিক নির্দিষ্ট মান চেক করে নির্দিষ্ট কোড চালায়। </i></u>
</pre>
<?php 
$sw_score = 30;
switch( $sw_score ) {
    case ($sw_score >= 80) : 
        echo "Result : A+";
        break;
    case ($sw_score >= 70) : 
        echo "Result : A";
        break;
    case ($sw_score >= 60) : 
        echo "Result : A-";
        break;
    case ($sw_score >= 50) : 
        echo "Result : B";
        break;
    case ($sw_score >= 40) : 
        echo "Result : C";
        break;
    case ($sw_score >= 33) : 
        echo "Result : D";
        break; 
    default:
        echo "You are Fail : F";  
}
    

?>









</body>
</html>