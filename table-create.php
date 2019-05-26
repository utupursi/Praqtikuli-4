<?php
$servername = "localhost:3306";
$username = "root";
$database = "yii2basic";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()) . "<br>";
}
echo "Connected successfully" . "<br>";

$sql = "CREATE TABLE country (
code CHAR(2) NOT NULL PRIMARY KEY,
`name` CHAR(52) NOT NULL,
`population` INT(11) NOT NULL DEFAULT '0'
)";
if (mysqli_query($conn, $sql) === TRUE) {
    echo "Table \"users\" created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}


$stmt = mysqli_query($conn,
"INSERT INTO `country` (code,name,population)
 VALUES ('CA','Canada',35985751),
('CN','China',1375210000),
('DE','Germany',81459000),
 ('FR','France',64513242),
 ('GB','United Kingdom',65097000),
('IN','India',1285400000),
('RU','Russia',146519759),
('US','United States',322976000)");
?>