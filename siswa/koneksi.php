<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "interestbk";

    $dtb = mysqli_connect($host, $user, $pass, $database);

    function show($query) {

        global $dtb;

        $box = [];

        $result = mysqli_query($dtb, $query);

        while($row = mysqli_fetch_assoc($result)) {

            $box[] = $row;

        }

        return $box;
      }
?>