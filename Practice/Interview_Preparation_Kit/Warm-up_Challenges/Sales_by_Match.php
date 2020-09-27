<?php

// Complete the sockMerchant function below.
function sockMerchant($n, $ar) {
  $res = array_count_values ($ar);
  $count = 0;

  foreach ($res as $key => $value){
    if($value % 2 === 0){
      $count += $value / 2;
    }else{
      if($value != 1){
        $count += floor($value / 2);
      }
    }
  }
  return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = sockMerchant($n, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
