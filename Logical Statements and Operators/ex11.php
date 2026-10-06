<?php 


$num1 =$_POST["num1"];



if($num1 < 0){  

echo"Negative";
}

elseif($num1 > 0){  

echo"positive";

}

else{

echo "number equles zero";


}


echo" <form action ='' method='POST'>";

echo "<label > insert a number:</lable>";
echo "<input type='number' name='num1'> ";


echo"<input type='submit' value'submit'>";

echo "</form>";




?>