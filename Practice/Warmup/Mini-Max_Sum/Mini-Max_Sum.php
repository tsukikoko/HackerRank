<?php

// Complete the miniMaxSum function below.
function miniMaxSum($arr) {
  $min = min($arr);
  $max = max($arr);

  $minSum = 0;
  $maxSum = 0;

  foreach($arr as $val){
    if($val === $min){
      $minSum = array_sum($arr) - $min;
    }
    if($val === $max){
      $maxSum = array_sum($arr) - $max;
    }

  }

  echo $maxSum ." " . $minSum;

}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
