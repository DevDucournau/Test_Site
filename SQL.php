<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $host = '10.101.5.223';
            $dbname = 'TEST';
            $username = 'root';
            $password = 'QOwT0cwp7d';
            

            try{
              $dbco = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
              $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              /*Sélectionne toutes les valeurs dans la table users*/
              $sth = $dbco->prepare("SELECT * FROM LigComm");
              $sth->execute();
              
              /*Retourne un tableau associatif pour chaque entrée de notre table
               *avec le nom des colonnes sélectionnées en clefs*/
              $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
              
              /*print_r permet un affichage lisible des résultats,
               *<pre> rend le tout un peu plus lisible*/
              echo '<pre>';
              print_r($resultat);
              echo '</pre>';
          }
                
          catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
          }
      ?>
  </body>
</html>