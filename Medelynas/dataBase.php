<?php

function connect(){
     return new mysqli("localhost","root","","medelynas");
}

function find($id){
    $conn = connect();
    $sql = "";
    $conn ->query($sql);
    $conn ->close();
}

function all(){
     $conn = connect();
    $sql = "SELECT * from `plants`";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function store(){
    $conn = connect();
    $sql = 'INSERT INTO `plants`(`id`, `name`, `is_yearling`, `quantity`) VALUES (NULL,"'.$_POST['name'].'","'.$_POST['is_yearling'].'","'.$_POST['quantity'].'")';
    $conn ->query($sql);
    $conn ->close();
}

function update(){
    $conn = connect();
    $sql = "";
    $conn ->query($sql);
    $conn ->close();
}

function destroy($id){
    $conn = connect();
    $sql = "";
    $conn ->query($sql);
    $conn ->close();
}