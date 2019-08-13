<!DOCTYPE html>
<html>
<head>
    <title>Insert</title>
</head>
<body>

    <?php
$servername = "localhost";
$username   = "root";
$password   = "admin1234";
$dbname     = "products";

$uno = $_GET["uno"];
$dos = $_GET["dos"];
$act = isset($_GET["activo"]) ? 1 : 0;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO product VALUES (null, '$uno','$dos','$act')";
    $conn->exec($sql);
    echo "New record created successfully";
}
catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?> 

</body>
</html>
