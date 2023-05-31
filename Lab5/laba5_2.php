<?php
function redirectToHome():void{
    header('Location: laba5_1.php');
    exit();
}

if (false === isset($_POST['Category'], $_POST['Title'], $_POST['Description'], $_POST['Email'])){
    redirectToHome();
}

$category = $_POST['Category'];
$title = $_POST['Title'];
$description = $_POST['Description'];
$email = $_POST['Email'];

mysqli_report(MYSQLI_REPORT_OFF);
$mysqli = @new mysqli('db', 'root', 'helloworld', 'web');

if ($mysqli->connect_errno) {
    error_log('Connection error!' . $mysqli->connect_errno);
	exit();
}

$mysqli->query("INSERT INTO table_result (Category, Title, Description, Email) VALUES ('$category', '$title', '$description', '$email')");

$mysqli->close();
redirectToHome();
?>