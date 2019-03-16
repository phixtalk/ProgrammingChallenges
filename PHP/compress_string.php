<?php
  //Given a string like "abbcccdddddeef", write a function that will return the compressed string "ab2c3d5e2f".
  
  
  function compressString($str){
    $compress = "";//declare & initialize compressed string var
    $strsplit = str_split($str);//split the string so each character is an array item
    $vals = array_count_values($strsplit);//count the number of occurrence of each item
    foreach($vals as $key => $val){//loop throught the new array to construct a compression
      //$compress.=str_repeat($key,$val);
      $compress.=$key.($val>1?$val:"");
    }
    return ($compress);
  }
  
  $str = "abbcccdddddeef";
  echo compressString($str);

?>
