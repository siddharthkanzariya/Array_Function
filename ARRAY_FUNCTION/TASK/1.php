<?php
$myarr=array(
    "A" => "Apple",
    "B" => "Banana"
);

if($_POST)
{
    $user=$_POST['txt1'];
    in_array($user, $myarr);
    echo "yes";
   
}
?>
<html>
    <body>
    <from method='post'>
        <input type='text' name='txt1'>
        <input type='submit'>
    </from>
    </body>
</html>