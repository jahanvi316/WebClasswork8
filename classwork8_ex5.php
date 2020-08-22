<!DOCTYPE html>
<html>

<head>
    <title>Classwork 8</title>
    <h1>Exercise 5</h1>
</head>

<body>
    <!-- 
            Create a form and a PHP page to accept the following fields in form of a HTML form and Print them back on the screen.
            Input text fields – Name, Age, Education, contact email, phone, address (multi line)
            Hint: Use the $_POST to read the values passed form the HTML page to PHP page.  HTML is for input, PHP is for printing.
        -->
        Hello <?php echo  $_POST["name"] ?> !
        <br/>

        Your age is  <?php echo $_POST["age"] ?>
        <br/>

        Your education includes <?php echo $_POST["edu"] ?>
        <br/>

        Your phone number is <?php echo $_POST["phone"] ?>
        <br/>

        Your address is <?php echo $_POST["address"] ?>


</body>

</html>