<?php 


$num1 =$_POST["num1"];

 $billAmount = 0.0;

if ($num1 <= 0) {
        return 0.0;
    }

    if ($num1 <= 50) {
        $billAmount = $num1 * 2.50;
    } 
    elseif ($num1 <= 150) {
        $billAmount = (50 * 2.50) + (($num1 - 50) * 5.00);
    } 
    elseif ($num1 <= 250) {
        $billAmount = (50 * 2.50) + (100 * 5.00) + (($num1 - 150) * 6.20);
    } 
    else {
        $billAmount = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($num1 - 250) * 7.50);
    }


    echo $billAmount;




echo $maxnum;


echo" <form action ='' method='POST'>";

echo "<label > insert a number:</lable>";
echo "<input type='number' name='num1'> ";


echo"<input type='submit' value'submit'>";

echo "</form>";




?>