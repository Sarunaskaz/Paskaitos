<?php
init();

function init(){
    session_start();
    if( !isset( $_SESSION['lot'])  ){
        $_SESSION['lot'] = [];
        $_SESSION['id'] = 1;
    }
}

function edit(){
    foreach ($_SESSION['lot'] as $cars) {
        if($cars['id'] == $_GET['id']){
           return $cars;
        }
     }
}

function store(){
    $cars['id'] = $_SESSION['id'];
    $cars['manufacturer'] = $_POST['manufacturer'];
    $cars['model'] = $_POST['model'];
    $cars['year'] = $_POST['year'];
    $cars['color'] = $_POST['color'];
    $cars['mileage'] = $_POST['mileage'];
    $cars['type'] = $_POST['type'];

    $_SESSION['id']++;
    
    $_SESSION['lot'][] = $cars;
}


function destroy(){
    foreach ($_SESSION['lot'] as $key => $cars) {
        if($cars['id'] == $_POST['id']){
            unset($_SESSION['lot'][$key]);
            return;
        }
    }
}


function update(){
    foreach ($_SESSION['lot'] as &$cars) {
        if($cars['id'] == $_POST['id']){
        $cars['manufacturer'] = $_POST['manufacturer'];
        $cars['model'] = $_POST['model'];
        $cars['year'] = $_POST['year'];
        $cars['color'] = $_POST['color'];
        $cars['mileage'] = $_POST['mileage'];
        $cars['type'] = $_POST['type'];
        return;
        }  
    }
}



?>