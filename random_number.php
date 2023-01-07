<?php
function getRandomNumber(){
    global $numbers, $is_guessed;
    $random_index = rand(0,count($numbers)-1);
    $random_number = $numbers[$random_index];
    $is_guessed = false;
    return $random_number;
}
?>
