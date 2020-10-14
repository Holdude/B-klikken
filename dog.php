<?php
    include("db_pdo.php");

   $navnet = $_GET['sub'];
   $antall = $_GET['navn'];
   $antall = $antall +1;
   //echo $navnet;

   $sql = "UPDATE Person SET antall =:an WHERE navn = :nv";
   //echo $sql;

   $stmt = $db->prepare($sql);
   $stmt->bindParam(":an", $antall);
   $stmt->bindParam(":nv", $navnet);
   $stmt->execute();

    if($stmt->rowCount()){
        header("Location:index.php");

    } else {
        header("Location:index.php");
    }

?>