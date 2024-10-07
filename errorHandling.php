<?php
$n=0;
try{
    if($n<=0){
        throw new Exception("Number is not positive");
        
    }
    $div=2/$n;
    echo "Division is: $div";
}
catch(Exception $e){
    echo "Error: ".$e->getMessage();
}
?>