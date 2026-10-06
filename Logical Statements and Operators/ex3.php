<?php 


$num1 =$_POST["num1"];
$num2 =$_POST["num2"];
$sum = $num1+$num2;

if($num1 !== $num2){
    echo "$sum";
}
else{
    echo $sum*3;
}
$sum =0;


echo" <form action ='' method='POST'>";

echo "<label > insert a number:</lable>";
echo "<input type='number' name='num1'> ";


echo "<label > insert a number:</lable>";
echo "<input type='number' name='num2'> ";

echo"<input type='submit' value'submit>'";

echo "</form>";




?>