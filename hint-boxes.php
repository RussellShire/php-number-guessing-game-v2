<div style="display:flex">
<?php

$rand_num_char = str_split(strtoupper($num));

foreach ($rand_num_char as $key => $char) : ?>
    <div style="
        border:solid;
        padding:15px 10px;
        margin:5px">
        <?php

        // checks for a guess, whether guess is shorter than answer and if the guess and answer chars match in correct positions
        $is_guess_char_valid = $guess_str && count($guess_char)-1 >= $key && $guess_char[$key] === $char;
        
        if($is_guess_char_valid) { 
            echo $char;
        } else {
            echo "*";
        }
        ?>
        
    </div>
<?php endforeach; 
?>
</div>
