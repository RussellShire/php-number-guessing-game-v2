<?php
function getRandomNumber(){
    global $numbers;
    $random_index = rand(0,count($numbers)-1);
    $random_number = $numbers[$random_index];
    return $random_number;
}
?>
