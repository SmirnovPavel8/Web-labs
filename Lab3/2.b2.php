<?php
session_start();
if (!empty($_SESSION)) 
{
    echo 'Имя: ',$_SESSION['Name'];
    echo' Фамилия: ',$_SESSION['Surname'] ;
    echo' Возраст: ',$_SESSION['Age'];

}
?>