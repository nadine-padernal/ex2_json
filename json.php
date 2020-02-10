<?php
  include 'config.php';
  include 'class.pets.php';

  header('Content-Type: application/json');

  $music = new Pets();
  $list=$music->get_pets();

  echo "{\"Pets\":";
  echo json_encode($list);
  echo "}";
?>
