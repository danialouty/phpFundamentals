<?php 


$num1 =$_POST["num1"];

if($num1> 0){
if($num1 %3 ==0 ){
    echo "true";
}
else{
    echo "false";
}

}

else{
    echo "give me a positive num";
}
$sum =0;



echo" <form action ='' method='POST'>";

echo "<label > insert a number:</lable>";
echo "<input type='number' name='num1'> ";


echo"<input type='submit' value'submit'>";

echo "</form>";




?>