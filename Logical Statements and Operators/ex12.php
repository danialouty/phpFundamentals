<?php 


$num1 =$_POST["num1"];
$num2 =$_POST["num2"];
$num3 =$_POST["num3"];
 
$arr1 = [$num1,$num2,$num3];

$maxnum = $arr1[$num1];

foreach ($arr1 as $number) {

    if($maxnum < $number) {


    $maxnum = $number;
    }


}

echo $maxnum;


echo" <form action ='' method='POST'>";

echo "<label > insert a number:</lable>";
echo "<input type='number' name='num1'> ";


echo "<label > insert a number:</lable>";
echo "<input type='number' name='num2'> ";


echo "<label > insert a number:</lable>";
echo "<input type='number' name='num3'> ";

echo"<input type='submit' value'submit'>";

echo "</form>";




?>