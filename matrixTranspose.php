<?php
$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
$rows=count($a);
$cols=count($a[0]);
$t=array_fill(0,$cols,array_fill(0,$rows,0));
for($i=0;$i<$rows;$i++){
    for($j=0;$j<$cols;$j++){
        $t[$j][$i]=$a[$i][$j];
    }
}
for($i=0;$i<$cols;$i++){
    for($j=0;$j<$rows;$j++){
        echo $t[$i][$j]." ";
    }
    echo "<br>";
}


?>