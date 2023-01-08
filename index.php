<html>
<body>
<?php
include "numbers.php";
include "random_number.php";

$message = "I'm thinking of a number between {$numbers[0]} and {$numbers[count($numbers)-1]}, can you guess it?";
$button_text = "Guess";
$rand_num_str = generateRandomNumber();
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
        $message = "CORRECT! It was {$num}. Here's another one between {$numbers[0]} and {$numbers[count($numbers)-1]}...";
        $num = $rand_num_str;
        $guess_str = "";
    } else {
        $message = "Guess again...";
    }
}
?>

<h1>Guess the number</h1>
<p><?= $message ?></p>

<?php
include "hint-boxes.php";

// echo "Correct answer for testing: " . $num . "<br>";
?>

<form method="post">
    <input type="text" name="input" value="<?= $guess_str ?>"/>
    <input type="hidden" name="rand-num" value="<?= $num ?>"/>

    <button type="submit"><?= $button_text ?></button>
</form>

</body>
</html>
