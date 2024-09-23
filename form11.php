<html>
    <head>
        <title>Form Validation</title>
    </head>
    <body>
        <?php
            $name = $email = $website = $comment = $gender = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = test_input($_POST["name"]);
                $email = test_input($_POST["email"]);
                $website = test_input($_POST["website"]);
                $comment = test_input($_POST["comment"]);
                $gender = test_input($_POST["gender"]);
            }
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>
        <h2>Create Form For Personal Details</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name: <input type="text" name="name"><br>
            Email: <input type="text" name="email"><br>
            Website: <input type="text" name="website"><br>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
            Gender: <input type="radio" value="female">Female
            <input type="radio" value="male">Male
            <input type="radio" value="other">Other
            <br><br>
            <input type="submit" name="submit"value="Submit">

        </form>
        <?php
            echo "<h2>Your Input:</h2>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $website;
            echo "<br>";
            echo $comment;
            echo "<br>";
            echo $gender;
        ?>

    </body>
</html>