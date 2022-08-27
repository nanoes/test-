<?php
$input = $_POST["form"];
$numbersRows = $input;
$count = $numbersRows * 2 - 1;
for ($i = 1; $i <= $count; $i++) {
    for ($j = 1; $j <= $count; $j++) {
        //ToDo: en la mitad agregarle un espacio mas a la x
        /*  if () {# code...} */ 
        if ($j == $i || ($j == $count - $i + 1)) {
            echo "X";
        }
        else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
