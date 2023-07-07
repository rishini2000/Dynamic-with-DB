<?php

include_once("CommonDao.php");

    $courses = array();

    $quary = "SELECT * FROM semester1";
    $result= CommonDao::getResult($quary);

    while($row = $result->fetch_array())
    {
      array_push($courses,$row['module']);
    }

    $json = json_encode($courses);
    echo $json;
?>