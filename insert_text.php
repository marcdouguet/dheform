<?php
  include("db.php");
  $db = connect();

  $sql = "SELECT play, author, title, genre, created FROM plays";
  $corpus = mselect($sql,$db);
  $data = ""; 
  foreach ($corpus as $play){
    $data .= "<option value='".$play["play"]."'>"
    .$play["author"]
    .", <i>"
    .$play["title"]
    ."</i> ("
    .$play["genre"]
    .", "
    .$play["created"]
    .")"
    ."</option>";

    continue;
    $text = file_get_contents("../tcp5t/".$play["play"].".txt");
    $text = str_replace("'", "''", $text);
    $test = str_replace('"', '""', $text);
    $sql = "UPDATE plays SET text = '".$text."' WHERE play = '".$play["play"]."'";
    insert($sql,$db);
  }

  file_put_contents("options.html", $data)
 ?>
