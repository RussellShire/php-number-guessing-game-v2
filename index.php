<html>
<body>
<?php
include "numbers.php";
include "random_number.php";

$rand_num_str = getRandomNumber();
$rand_num_char = str_split(strtoupper($rand_num_str));

$guess_str = "three";
$guess_char = str_split(strtoupper($guess_str));

include "hint-boxes.php";

echo $rand_num_str . "<br>";
print_r($rand_num_char);
?>

</body>
</html>