<?php 


 
$arr1 = [60,86,95,63,55,74,79,62,50];
$sum =0;
for ($i = 0; $i <= count($arr1); $i++){
        
    $sum += $arr1[$i] ;

}
$avg=$sum/count($arr1);


echo $avg;


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