<?php
session_start();
require_once 'functions.php';

if ($_SERVER["REQUEST_METHOD"]==="POST"){
    //TUTAJ DODAWANIE ZADANIA
    
    if (isset($_POST["task"]) && isTaskValid($_POST["task"])){
        
        addTask($_POST["task"]);
    }
    
}
header("location:index.php");