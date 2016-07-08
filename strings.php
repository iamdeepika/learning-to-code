<pre>
<?php
$newline = "\n";
$name = "deepika";
$age = 25.2;
$husband = "akash";
$daughter = "arohi";
$akash = false;
$lastname = "sharma";
$husbandLastname = "devgan";
$husbandFullname = $husband . " " . $husbandLastname;

echo "my name is ", $name, " sharma";
echo $newline, "my age is ", $age;
echo $newline, "my husband's name is ", $husband;
echo $newline, $name, " and ", $husband, " have ", $daughter;
echo $newline, $husband, " is having a coffee from second cup";
echo $newline, "i want to a new job as a php programmer, one day."; 
echo $newline, $husbandFullname, " is my love";
echo $akash, $newline;

$amount = 50.30;
$tip = 20;
$tipAmount = $amount * $tip / 100;

$total = $amount +$tipAmount;

echo "subtotal: ", $amount,$newline,
     "tip %: ", $tip, $newline,
     "tip $: ", $tipAmount, $newline,
     "total: ", $total;