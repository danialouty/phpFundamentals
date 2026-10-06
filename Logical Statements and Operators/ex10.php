<?php 


$age =$_POST["age"];

if($age <= 18){  

echo"is no eligible to vote";
}

else{

echo "is  eligible to vote";


}


echo" <form action ='' method='POST'>";

echo "<label > insert a age:</lable>";
echo "<input type='number' name='age'> ";


echo"<input type='submit' value'submit'>";

echo "</form>";




?>