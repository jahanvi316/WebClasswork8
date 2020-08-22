<!DOCTYPE html>
<html>

<head>
    <title>Classwork 8</title>
    <h1>Exercise 4</h1>
</head>

<body>
    <h2>Function</h2>
    <!--
            Write a function countWords($str) that takes any string of characters and finds the number of times each word occurs. You should ignore the distinction between capital and lowercase letters, and do not have to worry about dealing with characters that are not letters. 
            Hint: Create an associative array mapping word keys to the number of times they occur. You will need to look at PHP's string functions to split a sentence into words. 
            Hint 2: The print_r($array_name) function is useful for examining the contents of an array. 	
         -->

         <?php
         function countWords($str) {
            //$str = str_replace(" ", "", $str);
            echo "The string is : $str";
            $str = strtolower($str);
            $arr = str_split($str);

            //print_r($arr);
            echo "<br>";
            $num = array_count_values($arr);

            echo "<br> The count of the number of letters is as followed: <br>";

            foreach ($num as $key => $value) {
                echo $key . " --> " . $value;
                echo "<br>";
            }
         }

         function printNum($word, $str) {
             $str = strtolower($str);
             $word = strtolower($word);
             $arr = explode($word, $str);
             $num = count($arr) -1;
             echo "The word $word is in the string $num times";
         }


         countWords($_POST["string"]);
         echo "<br>";
         printNum($_POST["word"], $_POST["string"]);
         echo "<br>";

         ?>


</body>

</html>