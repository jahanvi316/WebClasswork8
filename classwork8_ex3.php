<!DOCTYPE html>
<html>

<head>
    <title>Classwork 8</title>
    <h1>Exercise 3</h1>
</head>

<body>
    <h2>Function</h2>
    <!-- 
            Write a function named word_count that accepts a string as its parameter and returns the number of words in the string. A word is a sequence of one or more non-space characters (any character other than ' '). 
            For example, the call of word_count("hello, how are you?") should return 4. Constraints: 
                • Do not use any data structures such as arrays to help you solve this problem. 
                • Do not use the String function explode on this problem. 
                • But you can declare as many simple variables like Integer, String, etc. as you like. Keep it simple.
        -->

        The word count is 
        <?php 
        function word_count($str) {
            echo str_word_count($str);
        }
        $inputString =$_POST["string"];
        word_count($inputString);
    ?>
        

</body>

</html>