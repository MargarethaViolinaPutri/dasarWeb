<!DOCTYPE HTML>
<html> 
    <head>
    </head>
    <body>
        <?php
            $rawString = "Welcome Birmingham Parent.
            Your replacement is a pleasure to have!";

            $malestr = str_replace("replacement", "son", $rawString);
            $femalestr = str_replace("replacement", "daughther", $rawString);

            echo "Son: ". $malestr. "<br>";
            echo "Daughther: ". $femalestr. "<br>";
        ?> 
    </body>
</html>