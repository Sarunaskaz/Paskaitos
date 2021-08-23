<?php
init();

function init(){
    if(!file_exists("./data.txt")){
        file_put_contents("./data.txt", "[]");
        file_put_contents("./id.txt", 0);
    }
}

function edit(){
    foreach (getData() as $medelynas) {
        if($medelynas['id'] == $_GET['id']){
           return $medelynas;
        }
     }
} 

function store(){
    $data = getData();
    $medelynas['id'] = newId();
    $medelynas['manufacturer'] = $_POST['manufacturer'];
    $medelynas['model'] = $_POST['model'];
    $medelynas['year'] = $_POST['year'];
    $data[] = $medelynas;

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
    foreach ($data as $key => $medelynas) {
        if($medelynas['id'] == $_POST['id']){
            unset($data[$key]);
            setData($data);
            return;
        }
    }
}


function update(){
     $data = getData();
    foreach ($data as &$medelynas) {
        if($medelynas['id'] == $_POST['id']){
        $medelynas['manufacturer'] = $_POST['manufacturer'];
        $medelynas['model'] = $_POST['model'];
        $medelynas['year'] = $_POST['year'];
        setData($data);
        return;
        }  
    }
}

?>