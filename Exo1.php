<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EXO 1</title>
    </head>

    <body>
        <?php
            //$BDD = new PDO('mysql:host=localhost;dbname=famille;charset=utf8', 'root','');
            //$response = $BDD->query("SELECT * FROM membre");
            $database = "famille";
            
            $db_handle = mysqli_connect("localhost", "root", '');
            if($db_handle){
                echo "OK db_handle <br>";
            }
            else{
                echo "ERROR db_handle <br>";
            }
            $db_found = mysqli_select_db($db_handle,$database);
            if($db_found){
                echo "OK db_found<br>";
            }
            else{
                echo "ERROR db_found<br>";
            }
            
            //while($data = $response->fetch()){
            //if($db_found){
                $sql = "SELECT * FROM membre";
                $result = mysqli_query($db_handle, $sql);
                while($data = mysqli_fetch_assoc($result)){
                    echo "ID: " . $data['ID'] . "<br>";
                    echo "Nom: " . $data['Nom'] . "<br>";
                    echo "Prenom: " . $data['Prenom'] . "<br>";
                    echo "Statut: " . $data['Statut'] . "<br>";
                    echo "Date de naissance: " . $data['DateNaissance'] . "<br>";
                }
            //}
            //else{
            //    echo "BDD NOT FOUND";
            //}
        ?>
    </body>

</html>