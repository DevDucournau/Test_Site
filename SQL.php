<?php
  $host = '10.101.5.223';
  $dbname = 'TEST';
  $username = 'root';
  $password = 'QOwT0cwp7d';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM LigComm";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>
<!DOCTYPE html>
<html>
<head>Afficher la table users</head>
<body>
 <h1>Liste des utilisateurs</h1>
 <table>
   <thead>
     <tr>
       <th>ID</th>
       <th>Name</th>
     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['id']); ?></td>
       <td><?php echo htmlspecialchars($row['name']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
</body>
</html>