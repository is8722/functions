<h1>Exercices sur les fonctions</h1>

<h2>Fonction permettant de capitaliser des mots</h2>
<p>Veuillez entrer un mot :</p>
<form action="" method="post">
    <input type="text" name="word">
    <input type="submit">
</form>

<?php 
$word = isset($_POST['word']) ? $_POST['word'] : NULL;

function captilazeWords($x) {
    return mb_convert_case($x, MB_CASE_TITLE);
}

echo '<br>';
echo ('Le mot après l\'utilisation de la fonction : ' . captilazeWords($word));
?>

<h2>Fonction permettant d'afficher l'année actuelle</h2>
<?php 
echo "Année actuelle : " . date('Y');
?>

<h2>Fonction permettant d'afficher la date et l'heure</h2>
<?php 
echo "Il est actuellement " . date('H:i:s') . " et on est le " . date("d/m/Y")
?>

<h2>Fonction permettant de faire la somme entre deux nombres</h2>
<p>Veuillez rentrer 2 chiffres :</p>
<form action="" method="post">
    <input type="text" name="number1">
    <input type="text" name="number2">
    <input type="submit">
</form>

<?php 
$nbr1 = isset($_POST['number1']) ? $_POST['number1'] : NULL;
$nbr2 = isset($_POST['number2']) ? $_POST['number2'] : NULL;
$error = "<p> Error: argument is the not a number. </p>";

function sum( $x,  $y) {
    return ($x == is_int($x) && $y == is_int($y)) ? $x + $y : $error ;
}

echo "La somme des deux nombres vaut : " . sum($nbr1, $nbr2);
?>

<h2>Fonction permettant de créer un acronyme à partir d'une chaine de caractère</h2>
<p>Veuillez rentrer une chaine de caractère :</p>
<form action="" method="post">
    <input type="text" name="string">
    <input type="submit">
</form>

<?php 
$str = isset($_POST['string']) ? $_POST['string'] : NULL ;

function convertIntoAcronym($x) {
    return preg_replace('/\b(\w)|./', '$1', $x);
}

echo ("La chaine de caractère devient l'acronyme suivant : " . convertIntoAcronym($str));
?>

<h2>Fonction qui remplace le a et e par æ</h2>
<?php 
$wordsReg = array('caecotrophie', 'chaenichthys', 'microsphaera', 'sphaerotheca') ; 
echo '<pre>';
print_r($wordsReg);
echo '</pre>';
echo "<br>";


function useRegex($x) {
    return preg_replace('/ae/', 'æ', $x);
}

echo '<pre>';
print_r(useRegex($wordsReg));
echo '</pre>';
?>


<h2>Fonction permettant de renvoyer un message d'erreur</h2>
<?php 
function displayError($err1, $err2){
    return "<div class='$err1'>$err2</div>";
}

echo displayError("error", "Incorrect email address");
?>

<h2>Fonction créant un générateur de mot</h2>
<?php
function randomWord() {
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $littleWord = "";
    $bigWord = "";

    for ($i=0; $i <5 ; $i++) { 
        $countI = rand(0, strlen($letters));
        $littleWord .= $letters[$countI];
    }

    for ($i=0; $i <15 ; $i++) { 
        $countI = rand(0, strlen($letters));
        $bigWord .= $letters[$countI];
    }

    echo $littleWord;
    echo "<br>";
    echo $bigWord;
}

randomWord();

?>

<h2>Fonction permettant de décapitaliser un string</h2>
<?php 
$str2 = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
echo "La chaine de caractère avant de décapitaliser : " . $str2;
echo "<br>";

function decapilazeStr($x) {
    return strtolower($x);
}
