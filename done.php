<?php
session_start();
require_once 'functions.php';

if (isset($_GET["done"])){
        
    removeTask($_GET["done"]);
}

header("location:index.php");