<?php
    include("db_pdo.php");
    $navnet = $_GET['sub'];
    $melding = $_GET['1'];
    $dato = date("Y-m-d");
    //echo $dato;

    $sql ="INSERT INTO Spyinfo (navn, info, dato) VALUES(:nv, :inf, :dat)";
    echo $sql;
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":nv", $navnet);
    $stmt->bindParam(":inf", $melding);
    $stmt->bindParam(":dat", $dato);
    $stmt->execute();

    if($stmt->rowCount()){
        echo "worsk";
        //header("Location:index.php");
    } else {
        echo "nein";
        //header("Location:index.php");
    }

?>