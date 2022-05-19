<?php

include_once "koneksi.php";

function show($query) {

  global $connection;

  $box = [];

  $result = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($result)) {

      $box[] = $row;

  }

  return $box;
}