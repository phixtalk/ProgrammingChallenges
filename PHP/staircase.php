<?php
/*
Staircase

Problem Statement You have to complete the given function StairCase which takes an integer N, the height of the staircase as its argument and prints a staircase as shown in the example.

Constaints

1 <= N <= 100

Sample Input

N = 6

Sample Output

      #
     ##
    ###
   ####
  #####
 ######

Note There are no leading spaces in the last line of the output.
*/

#Solution

function printStairCase($n){
    $str = "";
    for($i=1;$i<=$n;$i++){
        $str .= str_repeat(" ",($n-$i)).str_repeat("#",$i)."
";
    }
    echo ($str);
}

printStairCase(50);

?>
