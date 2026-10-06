<?php 


$temp =$_POST["tempr"];



if ($temp < 20 ){
    echo "ITS TIIIME WINTER";


}
else{
    echo "ITS SUMMER";
}


echo" <form action ='' method='post'>";

echo "<label > insert a temp:</lable>";
echo "<input type='text' name='tempr'> ";

echo"<input type='submit' value'submit>'";
echo "</form>";



?>