<?php
$name = $email = $address = $gender = "";
$error_name = $error_email = $error_address = $error_gender = "";

if($_SERVER['REQUEST_METHOD']=='POST')
{
if(empty($_POST['name']))
{
    $error_name="Name is mandatory field";
}
else
{
    $name = test($_POST['name']);
}

if(empty($_POST['email']))
{
    $error_email="Email is mandatory field";
}
else
{
    $email = test($_POST['email']);
}

if(empty($_POST['address']))
{
    $error_address="Address is mandatory field";
}
else
{
    $address = test($_POST['address']);
}

if(empty($_POST['gender']))
{
    $error_gender="Gender is mandatory field";
}
else
{
    $gender = test($_POST['gender']);
}

}

function test($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
Name:<input type="text" name="name"> <span><?php echo $error_name; ?></span><br><br>
Email:<input type="text" name="email"><span><?php echo $error_email; ?></span><br><br>
Address: <textarea name="address" cols="30" rows="10"></textarea><span><?php echo $error_address; ?></span><br><br>
Gender: <input type="radio" name="gender" value="male"> male
        <input type="radio" name="gender" value="female"> female
        <span><?php echo $error_gender; ?></span>
        <br><br>
        <input type="submit">
</form>

<?php
echo "<h1>The data filled  includes the following:</h1>";
echo $name. "<br>";
echo $email. "<br>";
echo $address. "<br>";
echo $gender. "<br>";
?>


