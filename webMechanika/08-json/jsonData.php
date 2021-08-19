<?php
init();

function init(){
    if(!file_exists("./data.txt")){
        file_put_contents("./data.txt", "[]");
        file_put_contents("./id.txt", 0);
    }
}

function edit(){
    foreach (getData() as $cars) {
        if($cars['id'] == $_GET['id']){
           return $cars;
        }
     }
} 

function store(){
    $data = getData();
    $cars['id'] = newId();
    $cars['manufacturer'] = $_POST['manufacturer'];
    $cars['model'] = $_POST['model'];
    $cars['year'] = $_POST['year'];
    $cars['color'] = $_POST['color'];
    $cars['mileage'] = $_POST['mileage'];
    $cars['type'] = $_POST['type'];

  
    $data[] = $cars;

    setData($data);
}

function getData(){
  $arr = json_decode( file_get_contents('./data.txt', 1));
    foreach($arr as &$entry ){
        $entry = (array) $entry;
    }
    return $arr;
}

function setData($arr){
  file_put_contents('./data.txt', json_encode($arr));
}
function newId(){
  $id = file_get_contents('./id.txt"');
  $id++;
  file_put_contents('./id.txt', $id);
  return $id;
}


function destroy(){
    $data = getData();
    foreach ($data as $key => $cars) {
        if($cars['id'] == $_POST['id']){
            unset($data[$key]);
            setData($data);
            return;
        }
    }
}


function update(){
     $data = getData();
    foreach ($data as &$cars) {
        if($cars['id'] == $_POST['id']){
        $cars['manufacturer'] = $_POST['manufacturer'];
        $cars['model'] = $_POST['model'];
        $cars['year'] = $_POST['year'];
        $cars['color'] = $_POST['color'];
        $cars['mileage'] = $_POST['mileage'];
        $cars['type'] = $_POST['type'];
        setData($data);
        return;
        }  
    }
}



?>