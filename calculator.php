<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
        <center>
            <H1>PHP Calculator</H1>
            <h3>Option 1-->Addition</h3>
            <h3>Option 2-->Subtraction</h3>
            <h3>Option 3-->Multiplication</h3>
            <h3>Option 4-->Division</h3>
            <h3>Option 5-->Modulus</h3>
            <form method="post">
                <table border="0">
                    <tr>
                        <td>Enter First Number</td>
                        <td><input type="text" name="num1"></td>
                    </tr>
                    <tr>
                        <td>Enter Second Number</td>
                        <td><input type="text" name="num2"></td>
                    </tr>
                    <tr>
                        <td>Enter Option</td>
                        <td><input type="text" name="option"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
            <?php
            if(isset($_POST['submit'])){
                $num1=$_POST['num1'];
                $num2=$_POST['num2'];
                $option=$_POST['option'];
                if($option==1){
                    $sum=$num1+$num2;
                    echo "Addition of $num1 and $num2 is $sum";
                }
                else if($option==2){
                    $sub=$num1-$num2;
                    echo "Subtraction of $num1 and $num2 is $sub";
                }
                else if($option==3){
                    $mul=$num1*$num2;
                    echo "Multiplication of $num1 and $num2 is $mul";
                }
                else if($option==4){
                    $div=$num1/$num2;
                    echo "Division of $num1 and $num2 is $div";
                }
                else if($option==5){
                    $mod=$num1%$num2;
                    echo "Modulus of $num1 and $num2 is $mod";
                }
                else{
                    echo "Invalid Option";
                }
            }
            ?>
        </center>
    </body>

</html>