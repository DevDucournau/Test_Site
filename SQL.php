<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <hi><a href="10.101.7.235/data/">fichier</a>
        <hi><a href="10.101.7.235/data/TEST_CMR/">fichier</a>
        <hi><a href="10.101.7.235/data/TEST_CMR/Lefa - Bitch (Clip officiel) ft. Vald.mp4">fichier</a>
        <hi><a href="10.101.2.51/var/lib/jelastic/CMR/TEST 2/">fichier</a>
        <?php
            $host = '10.101.2.51';
            $dbname = 'TEST';
            $username = 'root';
            $password = 'VQKtly58131';
            

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
      <hi><a href="10.101.14.167/data/invoice.pdf">fichier</a>
  </body>
</html>