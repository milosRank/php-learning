<!DOCTYPE html>
<?php 

    include 'process_forms.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST["input_fname"];

        if(!$name) $nameErr = "Morate uneti ovo polje!";
    }
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <legend>My form</legend>
        <br>
        <input type="text" name="input_fname" placeholder="Enter name">
        <?php echo"$nameErr"?>
        <br>
        <br>
        <input type="text" name="input_age" placeholder="Enter age" required>
        <br>
        <br>
        <input type="email" name="input_email" placeholder="Enter email">
        <br>
        <br>
        <button type="submit">Submit form</button>
    </form>
</body>
</html>