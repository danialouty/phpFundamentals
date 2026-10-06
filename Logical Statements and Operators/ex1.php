
<?php

$year=2020;

if($year %4 !== 0){
    echo"This year is not a leap year";

}

else if($year %100 == 0){
 if($year %400== 0){

 echo "its a leap year";
 }
 else {
    echo "This year is not a leap year";
 }

}
else{
    echo "its a leap year";
}



?>