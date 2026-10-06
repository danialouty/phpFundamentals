<?php 


$num1 =$_POST["num1"];

if($num1>=20 && $num1<= 50){

    echo "true";


}

else{
    echo "false";
}
$sum =0;



echo" <form action ='' method='POST'>";

echo "<label > insert a number:</lable>";
echo "<input type='number' name='num1'> ";


echo"<input type='submit' value'submit'>";

echo "</form>";




?>