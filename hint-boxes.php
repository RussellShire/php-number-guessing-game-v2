<div style="display:flex">
<?php

$rand_num_char = str_split(strtoupper($num));

echo count($guess_char);

foreach ($rand_num_char as $key => $char) : ?>
    <div style="
        border:solid;
        padding:15px 10px;
        margin:5px">
        <?php
        if($guess_str && count($guess_char)-1 >= $key && $guess_char[$key] === $char ) { // 
            echo $char;
        } else {
            echo "*";
        }
        ?>
        
    </div>
<?php endforeach; 
?>
</div>