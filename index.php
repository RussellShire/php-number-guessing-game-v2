<html>
<body>
<?php
include "numbers.php";
include "random_number.php";

$rand_num_str = getRandomNumber();
$rand_num_char = str_split(strtoupper($rand_num_str));

$guess_str = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["input"])) {
    $guess_str = trim(htmlspecialchars($_POST["input"]));
    $guess_char = str_split(strtoupper($guess_str));
}

?>

<form method="post">
    <input type="text" name="input" value="<?= $guess_str ?>"/>
    <button type="submit">Guess</button>
</form>

<?php
include "hint-boxes.php";

echo $rand_num_str . "<br>";
print_r($rand_num_char);
?>

</body>
</html>