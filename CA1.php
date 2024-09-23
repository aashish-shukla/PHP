
    

<?php
    $arr=array(1,2,3,5,6);
    $n=count($arr);
    $total=($n+1)*($n+2)/2;
    for($i=0;$i<$n;$i++){
        $total=$total-$arr[$i];
    }
    echo "Missing number is $total";
?>


