<html>
    <body style="background-color:yellow"><h1>
        Welcome <?php
        echo $_POST["firstName"];
        echo " ".$_POST["lastName"].".";
        ?><br>
        Your age is <?php
        echo $_POST["age"]." years.";
        ?><br>
        Your subject is <?php
        echo $_POST["course"].".";
        ?></h1>
    </body>
</html>
