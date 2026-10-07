<?php 


$num1 =$_POST["num1"];
$num2 =$_POST["num2"];
$sign =$_POST["sign"];
$sum=0;


if($sign== "+"){
    $sum= $num1+$num2;
    
}
else if($sign== "-"){
        $sum= $num1-$num2;

}


else if($sign== "*"){
        $sum= $num1*$num2;

}

else if($sign== "/"){
        $sum= $num1/$num2;

}

else{
    echo " not included";
}

echo $sum;


echo" <form action ='' method='POST'>";

echo "<label > insert a number:</lable>";
echo "<input type='number' name='num1'> ";

echo "<label > insert a number:</lable>";
echo "<input type='text' name=''> ";

echo "<label > insert a number:</lable>";
echo "<input type='number' name='num1'> ";

echo"<input type='submit' value'submit'>";

echo "</form>";




?>