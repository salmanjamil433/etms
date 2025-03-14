<?php  

$sName = "db"; // 'localhost' ki jagah 'db' use karein
$uName = "root";
$pass  = "somewordpress";
$db_name = "task_management_db";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name;charset=utf8", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) { // Yahan typo fix kiya
    echo "Connection failed: " . $e->getMessage();
    exit;
}
?>
