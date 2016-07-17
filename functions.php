<?php

function taskExists($taskKey){
    
    return key_exists($taskKey, getTasks());
}

function doneTask($taskKey){
    
    return removeTask($taskKey);
}

function removeTask($taskKey){
    
    if (taskExists($taskKey))
    unset($_SESSION["tasks"][$taskKey]);
}

function isTaskValid($task){
    
    return strlen(trim($task))>0;
}

function getTasks(){
    
    if (!isset($_SESSION["tasks"]))
    $_SESSION["tasks"]=[];

    return $_SESSION["tasks"];
}

function addTask($task){
    
    $_SESSION["tasks"][]=$task;
}
