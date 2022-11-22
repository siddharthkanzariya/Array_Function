<?php
$year=range("1995", "2001");

echo "<select>";
foreach ($year as $key=> $value)
{
    echo "<option>$value</option>";
}
echo "</select>";