<?php

    class CommonDao{

        public static function getResult($quary){

          try{
            $servername = "localhost";
            $username = "root";
            $password = "1234";
            $database = "fulltime";

            $dbconn = new mysqli($servername, $username, $password, $database);

            if (!$dbconn) {
              die("Connection failed: ".$dbconn->connect_error);
            }

            $result = $dbconn->query($quary);

          } catch(PDOException $e) {
            $result= $quary . "<br>" . $e->getMessage();
          }
            return $result;

            $dbconn->close();
        }

    }

?>