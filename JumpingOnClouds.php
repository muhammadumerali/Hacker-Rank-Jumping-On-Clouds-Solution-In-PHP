<?php
function jumpingOnClouds($c) {
    // Write your code here
    $start = $jumps = 0;
    while($start < count($c)){
        if(isset($c[$start + 2]) && $c[$start + 2] == 0){
            $start +=2;
            $jumps++;
        }
        else if(isset($c[$start + 1]) && $c[$start + 1] == 0){
            $start++;
            $jumps++;
        }
        else{
            $start++;
        }
    }
    return $jumps;
}