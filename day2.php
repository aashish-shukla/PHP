<!-- PHP progrm to print Armstrong numbers between Two Numbers -->
<?php
$num=751;
$sum=0;
$x=$num;
while($x!=0){
    $rem=(int)$x%10;
    $sum=$sum+$rem*$rem*$rem;
    $x=$x/10;
}
if($num==$sum){
    echo "Armstrong Number";
}
else{
    echo "Not an Armstrong Number";
}
echo "<br>";
?>

<!-- //pattern printing in PHP -->
<?php
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
?>

<!-- Foreach loop in PHP -->
<?php
$colors=array("red","green","blue","yellow");
foreach($colors as $value){
    echo "$value <br>";
}
echo "<br>";
?>