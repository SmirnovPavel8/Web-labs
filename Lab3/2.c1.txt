<?php
session_start();

if (!empty($_GET)) 
{
    $_SESSION['info'] = $_GET;
}
?>


<form action="" method="GET">
    <label for = "Name">Name</label>
        <input name="Name">

    <label for = "Age">Age</label>
        <input name="Age">

    <label for = "Income">Income</label>
        <input name="Income">

    <label for = "HowAreYou">HowAreYou</label>
        <input name="HowAreYou">

    <input type="Submit">
</form>