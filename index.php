<html>
<body>
<?php
include "numbers.php";
include "random_number.php";

$rand_num_str = getRandomNumber();
$guess_str = "";

if(isset($_POST["rand-num"])){
    $num = $_POST["rand-num"];
} else {
    $num = $rand_num_str;
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["input"])) {
    $guess_str = trim(htmlspecialchars($_POST["input"]));
    $guess_char = str_split(strtoupper($guess_str));

    if($guess_str === $num){
        $num = $rand_num_str;
        $guess_str = "";
    }
}
?>
<h1>Guess the number</h1>
<form method="post">
    <input type="text" name="input" value="<?= $guess_str ?>"/>
    <input type="hidden" name="rand-num" value="<?= $num ?>"/>

    <button type="submit">Guess</button>
</form>

<?php
include "hint-boxes.php";

// print_r($rand_num_char);
// echo "<br>";
// echo "num: " . $num . "<br>";
// echo "guess: " . $guess_str . "<br>";
// echo "correct? " . $correct . "<br>";
// echo "rand num: " . $rand_num_str;
?>

</body>
</html>
