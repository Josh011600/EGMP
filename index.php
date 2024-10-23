<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
?>

<a href="add.php"><button>ADD DATA</button></a>
<table border="1" width="500">
<tr>
    <td>Thumbnail</td>
    <td>Title</td>
    <td>Year</td>
    <td>Rating</td>   
    <td></td>
</tr>
<?php
$data = $db->retrieve("film");
$data = json_decode($data , 1);
/*
*/
if (is_array($data)) {
  foreach ($data as $film) {
    $thumbnail = isset($film['thumbnail']) ? $film['thumbnail'] : 'default.jpg'; // Default image if thumbnail not found
    $title = isset($film['title']) ? $film['title'] : 'Unknown Title';
    $year = isset($film['year']) ? $film['year'] : 'N/A';
    $rating = isset($film['rating']) ? $film['rating'] : 'N/A';

   
  }
}
if (is_array($data)) {
  foreach ($data as $film) {
    echo "<tr>
    <td><img src='{$film['thumbnail']}' class='thumb'></td>
    <td>{$film['title']}</td>
    <td>{$film['year']}</td>
    <td>{$film['rating']}</td> 
</tr>";
  }
}

?>
</table>
<style>
  *{
    text-align: center;
  }
  table{
    align-items: center;
    justify-content: center;
  }
  .thumb
  { width:170px;,height:110px;}
  </style>