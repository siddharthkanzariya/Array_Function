<?php
if($_POST)
{
    $programming=$_POST['cbox'];
    $string= implode(",", $programming);
    echo "$string";
}
?>
<html>
    <body>
        <form method="post">
            Programming : 
            </br>
            <input type="checkbox" name="cbox[]" value="c">C
            </br>
            <input type="checkbox" name="cbox[]" value="c++">C++
            </br>
            <input type="checkbox" name="cbox[]" value="php">PHP
            </br>
            <input type="submit">
        </form>
    </body>
</html>