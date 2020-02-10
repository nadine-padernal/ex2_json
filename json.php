<?php
  include 'config.php';
  include 'class.pets.php';

  header('Content-Type: application/json');

  $music = new Music();
  $list=$music->get_Music();

  echo "{\"Pets\":";
  echo json_encode($list);
  echo "}";
?>
