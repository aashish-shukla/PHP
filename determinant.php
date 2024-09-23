<!-- Determinant of matrix -->
<?php
$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
$rows=count($a);
$cols=count($a[0]);
if($rows==3 && $cols==3){
    $det=0;
    for($i=0;$i<3;$i++){
        $det=$det+$a[0][$i]*($a[1][($i+1)%3]*$a[2][($i+2)%3]-$a[1][($i+2)%3]*$a[2][($i+1)%3]);
    }
    echo "Determinant of matrix is ".$det;
}
else{
    echo "Matrix is not 3x3";
}