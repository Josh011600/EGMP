<?php
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);

$insert = $db->insert("film", [
    "title"     => $_POST['title'],
    "thumbnail" => $_POST['thumbnail'],
    "year"      => $_POST['year'],
    "rating"    => $_POST['rating'],
]);


echo "data has been saved!";
echo "'<a href='index.php''"."'>'" . "Return</a>";
?>