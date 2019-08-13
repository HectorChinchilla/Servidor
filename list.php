<!DOCTYPE html>
<html>
<head>
	<title>Lista</title>
</head>
<body>

	<?php
$servername = "localhost";
$username = "root";
$password = "admin1234";
$dbname = "products";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select * from product";
    
    if($conn){
        $result = $conn->query($sql);
        foreach ($result as $value) {
            echo 
        }

    }else{
            echo "nothig";

    }
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?> 

</body>
</html>