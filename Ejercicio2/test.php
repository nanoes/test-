<?php
//Tienes un arreglo (llamado mymyArray) con 10 elementos (enteros en el rango de 1 a 9).
// Escribe un programa en PHP que imprima el nÃºmero que tiene mÃ¡s ocurrencias
$myArray = [1,2,2,4,5,6,7,8,8,8,9,9,9];

//this function return the number of ocurrences of a number in the array and the quantity of times that the number appears in the array
function moreOcurrences($myArray){
    $ocurrences = [];
    foreach($myArray as $number){
        if(isset($ocurrences[$number])){
            $ocurrences[$number]++;
        }else{
            $ocurrences[$number] = 1;
        }
    }
    $max = 0;
    $maxNumber = 0;
    foreach($ocurrences as $number => $ocurrence){
        if($ocurrence > $max){
            $max = $ocurrence;
            $maxNumber = $number;
        }
    }
    //Longest: 3 "Number:" 8
    echo "Number:" . $maxNumber  ."<br>";
    echo "Longest:" . $max."<br>";
    //return [$maxNumber, $max];
}
moreOcurrences($myArray);
?>