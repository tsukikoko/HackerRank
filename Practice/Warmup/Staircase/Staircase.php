<?php

// Complete the staircase function below.
function staircase($n) {

for($i = 0; $i<$n; $i++){
  $count = 0;
  $space = ($n-1) -$i;
      while($space > 0){
        echo(" ");
        $space--;
      }
      $count = 0;
      while($count < $i+1){
        echo("#");
        $count++;
      }
      echo("\n");  // 改行
    }
    return 0;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);