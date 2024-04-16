<!DOCTYPE html>
<html lang="pt-b">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php </title>
</head>
<body>
    <?php
    echo "php ok<br>";
    
    include 'conecta.php';

    $sql = "SELECT * FROM agenda";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["nome"]. " " . $row["sobrenome"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
    
</body>
</html>