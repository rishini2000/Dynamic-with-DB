<?php

include_once("CommonDao.php");

    $semester = $_GET["semester"];

    $courses = array();

    $quary = "SELECT * FROM ".$semester;

    $result= CommonDao::getResult($quary);

    while($row = $result->fetch_array())
    {
      // array_push($courses,$row['module']);
      $courses[] = $row['module'];
    }

    $json = json_encode($courses);
    echo $json;
?>