<?php


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "invalid request";
    exit;
}

require 'database_connection.php';


$name = $_POST['name'];
if (empty($name)) {
    echo "name is required ";
    exit;
}
if (strlen($name) > 50) {
    echo "pokemon name is to long ";
}
if (!isset($_POST['name'])) {
    echo "Name field required";
    exit;
}

$type = $_POST['type'];
if (empty($type)) {
    echo "type is required ";
    exit;
}
if (strlen($type) > 20) {
    echo "pokemon type is to long ";
}
if(!isset($_POST['type'])){
    echo "tyoe field required";
    exit;
}

$image = $_POST['image'];
if (empty($image)) {
    echo "image is required ";
    exit;
}
if (strlen($image) > 255) {
    echo "pokemon image url is to long ";
}
if(!isset($_POST['image'])){
    echo "image field required";
    exit;
}
//if (!filter_var($image, FILTER_VALIDATE_URL)) {
//echo "Invalid image URL ";
//exit;
//}
$evolution_stage = $_POST['evolution_stage'];
if(!isset($_POST['evolution_stage'])){
    echo "evolution_stage field required";
    exit;
}
$description = $_POST['description'];
if(!isset($_POST['description'])){
    echo "description field required";
    exit;
}
$abilities = $_POST['abilities'];
if(!isset($_POST['abilities'])){
    echo "abilities field required";
    exit;
}
$height = $_POST['height'];
if(!isset($_POST['height'])){
    echo "height field required";
    exit;
}
$weight = $_POST['weight'];
if(!isset($_POST['weight'])){
    echo "weight field required";
    exit;
}
$hp = $_POST['hp'];
if(!isset($_POST['hp'])){
    echo "hp field required";
    exit;
}
$attack = $_POST['attack'];
if(!isset($_POST['attack'])){
    echo "attack field required";
    exit;
}
$defense = $_POST['defense'];
if(!isset($_POST['defense'])){
    echo "defense field required";
    exit;
}

$fields = ['hp', 'attack', 'defense'];
foreach ($fields as $field) {
    if (!isset($_POST[$field]) || !ctype_digit($_POST[$field])) {
        exit(ucfirst($field) . " must be an integer.");
    }
}

$hp = $_POST['hp'];
$attack = $_POST['attack'];
$defense = $_POST['defense'];




$sql = "INSERT INTO cards (name, type, image, evolution_stage, description, abilities, weight, height, hp, attack, defense) 
VALUES ('$name', '$type', '$image', '$evolution_stage', '$description', '$abilities', '$weight', '$height', '$hp', '$attack', '$defense')";

if (mysqli_query($conn, $sql)) {
    echo 'pokemon is toegevoegd';
}
