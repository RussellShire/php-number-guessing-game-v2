<html>
<body>
<?php
include "numbers.php";
include "random_number.php";

$rand_num_str = getRandomNumber();

if(isset($_POST["rand-num"])){
    $num = $_POST["rand-num"];
} else {
    $num = $rand_num_str;
}

$guess_str = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["input"])) {
    $guess_str = trim(htmlspecialchars($_POST["input"]));
    $guess_char = str_split(strtoupper($guess_str));
}
?>

<form method="post">
    <input type="text" name="input" value="<?= $guess_str ?>"/>
    <input type="hidden" name="rand-num" value="<?= $num ?>"/>

    <button type="submit">Guess</button>
</form>

<?php
include "hint-boxes.php";

print_r($rand_num_char);
echo "<br>";
echo $num;
?>

</body>
</html>