<?php
include('./jsonData.php');

if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])){
    $medelynas = edit();
}

if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['id'])){
    store();
    header("location:./");
    die;
}

if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['manufacturer'])){
    destroy();
    header("location:./");
    die; 
}


if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])  ){
    update();
    header("location:./");
    die;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <form class="form" action="" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Manufacturer</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="manufacturer" value="<?= (isset($medelynas))? $medelynas['manufacturer'] : "" ?>">
            </div>
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Model</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="model" value="<?= (isset($medelynas))? $medelynas['model'] : "" ?>">
            </div>
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Year</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="year" value="<?= (isset($medelynas))? $medelynas['year'] : "" ?>">
            </div>
         </div>
         </div>
     </div>
      <?php if(!isset($medelynas)){
            echo '<button class="btn btn-primary" type="submit">Add car</button>';
    }else{
            echo '
            <input type="hidden" name="id" value="'. $medelynas['id'].' ">
            <button class="btn btn-info" type="submit">Update car</button>';
    } ?>
</form>

<?php
    if(isset($_GET['show'])){
        echo  '<a class="btn btn-dark" href="?hide">Hide</a>';
        include('./table.php');

}   else{ 
        echo '<a class="btn btn-success" href="?show">Show</a>';
}
?>
    
</body>
</html>