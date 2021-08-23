<?php

function connect(){
    $msqli = new msqli("localhost","root","", "medelynas");
}


function store(){
    $conn = connect();
    $sql = "";
    $conn ->query($sql);
    $conn ->close();
}

function update(){
    $conn = connect();
    $sql = "";
    $conn ->query($sql);
    $conn ->close();
}

function find($id){
    $conn = connect();
    $sql = "";
    $conn ->query($sql);
    $conn ->close();
}