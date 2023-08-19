<?php


$conn = mysqli_connect('localhost', 'root', '', 'clinic');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$servername = "localhost";
$username = "root";
$password = "";
$db = "clinic";
try {
    $conny = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conny->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


// reed
function getAll($sql)
{
    global $conn;
    $result = mysqli_query($conn, $sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {

        $data[] = $row;
    }
    return $data;
}

// insert
function insert($sql)
{
    global $conn;
    $result = mysqli_query($conn, $sql);
}

function select_db($sql)
{
    global $conny;
    $result = $conny->query($sql);
    return $result;
}
// delete
// update
// get row