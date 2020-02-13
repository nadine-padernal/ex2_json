<?php
  include 'config.php';
  include 'class.pets.php';

  header('Content-Type: application/json');

  $pets = new Pets();
  $list=$pets->get_pets();

  echo "{\"Pets\":";
  echo json_encode($list);
  echo "}";
?>
