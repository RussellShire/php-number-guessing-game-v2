<div style="display:flex">
<?php
foreach ($rand_num_char as $key => $char) : ?>
    <div style="
        border:solid;
        padding:15px 10px;
        margin:5px">
        <?php
        if($guess_char[$key] === $char) {
            echo $char;
        }
        
        ?>
        
    </div>
<?php endforeach; 
?>
</div>