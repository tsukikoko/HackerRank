<?php

/*
 * Complete the timeConversion function below.
 */
function timeConversion($s) {
    /*
     * Write your code here.
     */
    $tim = "";
    $arr = preg_split("/[:]/",$s);

    if( preg_match( '/AM$/', $arr[2]) ) {
      $replace = str_replace('AM', '', $arr[2]);
      if($arr[0] === "12"){
        $arr[0] = "00";
      }
    }else{ // PM
      $replace = str_replace('PM', '', $arr[2]);

      if($arr[0] !== "12"){
        $arr[0] = strval(intval($arr[0]) + 12);
      }
    }
    $arr[2] = $replace;
    return $arr[0] .":". $arr[1] .":". $arr[2];
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $s);

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);
