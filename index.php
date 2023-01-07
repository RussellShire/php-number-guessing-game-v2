<html>
<body>
<?php
include "numbers.php";
include "random_number.php";

$rand_num_str = getRandomNumber();
$rand_num_char = str_split($rand_num_str);

?>
<div style="display:flex">
<?php
foreach ($rand_num_char as $char) : ?>
    <div style="
        border:solid;
        padding:15px 10px;
        margin:5px">
        <!-- <?= $char; ?> -->
        
    </div>
<?php endforeach; 
?>
</div>
<?php


echo $rand_num_str . "<br>";
print_r($rand_num_char);
?>

</body>
</html>