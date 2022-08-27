<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <p>
    There is a 3 x 3 matrix containing numbers from 1 to 9 simulated with
    a one dimensional array. So, for example, this array: 1 2 9 2 5 3 5 1
    5 Would be represented as (1,2,9,2,5,3,5,1,5). The objective is to identify the
    path that gives the smallest sum when traversing the two-dimensional array of
    left to right. It starts in the left column and always moves
    one column to the right of the same row or one row up or
    down. In the example, if you start from 1, you can go to 2 or 5.
    there, if it went to 5, it can go to 9, 3 or 5. On the other hand, if it goes from
    1 to 2, from the 2 of the middle column could not go to the 5 of the
    last row in the right column. It is necessary to find the way
    produces the lowest number by adding the values ​​of each number it visits.
    So for the example, the path with the smallest sum would be 1,2,3 The code
    to declare and populate myArray is already there, you can edit it to test with
    other values ​​and you can click the update button next to it to
    return to the original value that will be used to validate your code during
    the proof. The result of your program should be the 3 numbers by which
    passed to get the smallest sum separated by a space. For the example,
    the output would be exactly like this: 1 2 3
  </p>

  <?php

  $myArray = array(
    1, 2, 9,
    2, 5, 3,
    5, 1, 5
  );
  $array_num = count($myArray);
  echo $myArray[0] . " ";
  $index = 0;
  for ($i = 0; $i < $array_num; $i++) {
    /*  echo "i: " . $i. "-index : ".$index. "<br>"; */
    if ($i == 0) {
      if ($myArray[$i + 1] < $myArray[$i + 4]) {
        $suma = $myArray[$i + 1];
        echo $suma . " ";
        $index = $i + 1;
      } else {
        echo $myArray[$i + 4] . " ";
        $sumaNew = $myArray[$i + 4];
        echo $sumaNew . " ";
        $index = $i + 4;
      }
    }
    if ($i == 1) {
      if ($myArray[$index + 1] < $myArray[$index + 4]) {
        $suma = $myArray[$index + 1];
        echo $suma . " ";
      } else {
        if ($myArray[$index + 4] < $myArray[2]) {
          $suma = $myArray[$index + 4];
          echo $suma . " ";
        } else {
          echo $myArray[2] . " ";
        }
      }
    }
  }
  ?>
</body>

</html>