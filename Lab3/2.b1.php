<?php
session_start();

if (!empty($_GET)) 
{
    $_SESSION['Name'] = $_GET['Name'];
    $_SESSION['Surname'] = $_GET['Surname'];
    $_SESSION['Age'] = $_GET['Age'];
}

?>

<form action="" method="GET">
    <label for = "Name">Name</label>
        <input name="Name" required>

    <label for = "Surname">Surname</label>
	    <input name="Surname" required>

    <label for = "Age">Age</label>
        <input name="Age" required>
        
	<input type="Submit">
</form>