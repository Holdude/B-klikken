

<?php
    include("Include/header.php");
    include("db_pdo.php");

    $personListe = array();
    $liste1 = array();
    $liste2 = array();
    $liste3 = array();
    $liste4 = array();

    $sql = 'SELECT Navn, Antall FROM Person';
    $stmt = $db->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount()){
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $navn = $row['Navn'];
            $antall = $row['Antall'];

            array_push($personListe, $navn);
            array_push($personListe, $antall);

            //echo $navn. " Antall: ". $antall . " ". $info."<br>";
        }
    }

    $sql = 'SELECT navn, info, dato FROM Spyinfo';
    $stmt = $db->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount()){
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $navn = $row['navn'];
            $info = $row['info'];
            $dato = $row['dato'];

            if($navn == $personListe[0]){
                array_push($liste1, $info);
                array_push($liste1, $dato);

            }else if($navn == $personListe[2]){
                array_push($liste2, $info);
                array_push($liste2, $dato);
            }else if($navn == $personListe[4]){
                array_push($liste3, $info);
                array_push($liste3, $dato);

            }else if($navn == $personListe[6]){
                array_push($liste4, $info);
                array_push($liste4, $dato);
            }
        }
    }



    echo'
        <h1 style="text-align:center">Spy</h1>
        <section =class"row">
            <section class="column">
                <h3>'.$personListe[0].'</h3>
                <p>'.$personListe[1].'</p>
                <form action="dog.php" type="GET">
                    <input type="text" name="sub" value="'.$personListe[0].'" style="display:none;">
                    <input type="text" name="navn" value="'.$personListe[1].'" style="display:none;">
                    <input type="submit" value="+1">
                </form>

                <form action="smd.php" type="GET">
                    <input type="text" name="sub" value="'.$personListe[0].'" style="display:none;">
                    <textarea id="1" name="1" rows="4" cols="20"></textarea><br>
                    <input type="submit">
                </form>
                <h3>Kommentar:</h3>
                ';
                foreach($liste1 as $utinfo){
                    echo "<p>".$utinfo."</p>";
                }

            echo'
            </section>
            <section class="column">
            <h3>'.$personListe[2].'</h3>
            <p>'.$personListe[3].'</p>
            <form action="dog.php" type="GET">
            <input type="text" name="sub" value="'.$personListe[2].'" style="display:none;">
            <input type="text" name="navn" value="'.$personListe[3].'" style="display:none;">
            <input type="submit" value="+1">
        </form>

        <form action="smd.php" type="GET">
            <input type="text" name="sub" value="'.$personListe[2].'" style="display:none;">
            <textarea id="1" name="1" rows="4" cols="20"></textarea><br>
            <input type="submit">
        </form>
            <h3>Kommentar:</h3>
            ';
            foreach($liste2 as $utinfo){
                echo "<p>".$utinfo."</p>";
            }
            
        echo'
        </section>
        <section class="column">
        <h3>'.$personListe[4].'</h3>
        <p>'.$personListe[5].'</p>
        <form action="dog.php" type="GET">
        <input type="text" name="sub" value="'.$personListe[4].'" style="display:none;">
        <input type="text" name="navn" value="'.$personListe[5].'" style="display:none;">
        <input type="submit" value="+1">
    </form>

    <form action="smd.php" type="GET">
        <input type="text" name="sub" value="'.$personListe[4].'" style="display:none;">
        <textarea id="1" name="1" rows="4" cols="20"></textarea><br>
        <input type="submit">
    </form>
        <h3>Kommentar:</h3>
        ';
        foreach($liste3 as $utinfo){
            echo "<p>".$utinfo."</p>";
        }
        
    echo'
    </section>
    <section class="column">
    <h3>'.$personListe[6].'</h3>
    <p>'.$personListe[7].'</p>
    <form action="dog.php" type="GET">
    <input type="text" name="sub" value="'.$personListe[6].'" style="display:none;">
    <input type="text" name="navn" value="'.$personListe[7].'" style="display:none;">
    <input type="submit" value="+1">
</form>

<form action="smd.php" type="GET">
    <input type="text" name="sub" value="'.$personListe[6].'" style="display:none;">
    <textarea id="1" name="1" rows="4" cols="20"></textarea><br>
    <input type="submit">
</form>
    <h3>Kommentar:</h3>
    ';
    foreach($liste4 as $utinfo){
        echo "<p>".$utinfo."</p>";
    }
    
echo'
</section>
    ';

echo'
</section>';

?>
</body>
</html>
