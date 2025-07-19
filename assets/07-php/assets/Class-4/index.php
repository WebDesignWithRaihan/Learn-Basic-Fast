<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-4 ✅ Loops (while, do...while, for, foreach)
</title>
</head>
<body style="font-size: 16px; width: 1000px; margin: auto;;">

<pre> 
<u><i>✅ Loops (while, do...while, for, foreach) </i></u>
PHP-তে Loop (লুপ) হল এমন একটি কন্ট্রোল স্ট্রাকচার যা দিয়ে একটি নির্দিষ্ট কাজ একাধিকবার চালানো যায় যতক্ষণ না কোনো শর্ত মিথ্যা হয়।

PHP-তে মোট ৪ প্রকার লুপ আছে:
1. while loop
2. do...while loop
3. for loop
4. foreach loop
</pre>
<pre>
<h4>start</h4>
<u> 1. while loop</u>
যতক্ষণ শর্ত সত্য, কোড চালানো হবে while loop এ
🔧 🔸 সিনট্যাক্স:

// initialization
while (condition) {
    // Repeat this block 
}
$i = 1;
while ($i <= 5) {
    echo "$i";
    $i++; // $i = $i +1;
}
</pre>
<?php 
echo "increment while(){} loop <br>";
$i = 0;
while ($i <= 5) {
    echo "$i <br>";
    // $i = $i +1;
    $i++;
}
?>
<pre> 
<U> 2. do...while loop </U>
আগে একবার কোড চালায়, তারপর শর্ত চেক করে do...while loop
🔧 🔸 সিনট্যাক্স:

do {
    // লুপের ভিতরের কোড
} while (condition);

<u>example</u>
$i = 1;
do { 
    echo "Login Attempt $i ";
    $i++;
} while ($i <=3);

</pre>

<?php 
echo " <u> Result </u> <br>";
$i = 1;
do { 
    echo "Login Attempt $i <= 3 <br>";
    $i++;
} while ($i <=3) ;

?>

<pre> 
<u>3. for loop</u>  

নির্দিষ্ট সংখ্যক বার লুপ চালানোর জন্য for loop
🔧 🔸 সিনট্যাক্স:


for ($initialization ; condition; increment) {
    // Repeat block
}
increment
for ($i = 0; $i <= 5; $i++) {
    echo "$i";
}
decrement
for ($i = 5; $i >= 0; $i--) {
    echo "$i";
}
নামতা
for ($i = 0; $i <= 5; $i++) {
    echo "5 x $i = " . (5*$i);
}
</pre>

<?php 
echo "increment for(){} loop <br>";
for ($i = 0; $i <= 5; $i++) {
    echo "$i <br>";
}
echo " নামতা for Loop <br> "; 
for ($i = 0; $i <= 5; $i++) {
    echo "5 x $i = " . (5*$i) . "<br>";
}
echo " decrement for loop <br>";
for ($i = 5; $i >= 0; $i--) {
    echo "$i <br>";
}

?>
<pre> 
<u>4. foreach loop</u> 
array-এর জন্য বিশেষভাবে ব্যবহৃত foreach loop

🔧 🔸 সিনট্যাক্স:
</pre>

<pre> 
    
<u> পার্থক্য while vs for  </u>

যদি লুপ কন্ডিশন runtime-এ নির্ধারিত হয় বা পূর্ব-নির্ধারিত না থাকে 👉 while ব্যবহার করুন।
যদি আপনি জানেন কতবার লুপ চালাতে হবে 👉 for ব্যবহার করুন।

</pre>

<pre>
    <u>  for Loop // শর্তে কত বার ঘুরবে সেটা জানা থাকলে </u>
    for ($i = 0; $i <= 5; $i++) {
    echo "$i <br>";
}
</pre>

<?php 
// 
echo "increment for(){} loop <br>";
for ($i = 0; $i <= 5; $i++) {
    echo "$i <br>";
}

// কতবার ঘুরবে সেটা জানা না থাকলে 

?>

<pre>
    <u> While Loop // শর্তে কতবার ঘুরবে সেটা জানা না থাকলে  </u>
$correctPassword= "12345";
$userInput = " ";
while ( $userInput !== $correctPassword ) {
    $userInput = readline("সঠিক পাসওয়ার্ড দিন :- ");
}

</pre>


</body>
</html>