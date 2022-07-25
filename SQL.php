<?php
  $host = '10.101.5.223';
  $dbname = 'TEST';
  $username = 'root';
  $password = 'QOwT0cwp7d';
    
  
$conn =  new mysqli($host, $username, $password, $dbname) ;
if($conn->connect_errno){
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}

$sql = "SELECT * FROM LigComm";

$result = $conn->query(sql)
or trigger_error($conn->error);
$row = $result->fetch_array(MYSQL_BOTH);
echo $row[1]; //or echo $row[1]
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