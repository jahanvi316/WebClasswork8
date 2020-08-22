<!DOCTYPE html>
<html>

<head>
    <title>Classwork 8</title>
    <h1>Exercise 2</h1>
</head>

<body>
    <h2>Loops</h2>
    <!-- 
            Write a function named triangle that accepts an integer parameter representing a size in characters, 
            and prints to the console a right-aligned right triangle figure whose non-hypotenuse sides are that length. 
            For example, the call of triangle(5); should print the following output:
            *
            **
            ***
            *****
            ******
        -->

        <?php
        function triangle($size) {
            for($x = 0; $x < $size; $x++){
                for($y = 0; $y <= $x; $y++) {
                    echo "*";
                }
                echo "<br>";
            }
        }

        triangle(5);

        ?>

</body>

</html>