
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="my_contact";
// Create connection
$conn = new mysqli($servername, $username, $password);
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $hihi=$_POST["hihi"];
    $stmt = $conn->prepare("insert into test values(NULL,$hihi)"); 
    $kq=$stmt->execute();
    if($kq)
    {
        echo "{errorCode:0,message:'thanh cong'}";
    }
    else
    {
        echo "{errorCode:1,message:'that bai'}";
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
