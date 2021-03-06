<?php
include('./dataBase.php');

    if(isset($_POST['create'] )){
        store();
        header("location:./");
        die;
    }

    if(isset($_POST['update'] )){
        update();
        header("location:./");
        die;
    }
    
    if(isset($_POST['delete'] )){
        destroy($_POST['delete']);
        header("location:./");
        die; 
    }

    $action = 'create';

    if(isset($_GET['edit'] )){
            $plant = find($_GET['edit']);
            $action = 'update';
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
            <label class="col-sm-2 col-form-label" >Plant name</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="name" value="<?= (isset($plant))? $plant['name'] : "" ?>">
            </div>
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Is yearling</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="is_yearling" value="<?= (isset($plant))? $plant['is_yearling'] : "" ?>">
            </div>
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Quantity</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="quantity" value="<?= (isset($plant))? $plant['quantity'] : "" ?>">
            </div>
         </div>
         </div>
     </div>
      <?php if(!isset($plant)){
            echo '<button class="btn btn-primary" name="create" type="submit">Add plant</button>';
    }else{
            echo '<button class="btn btn-info" name="update" type="submit" value="'.$plant['id'].'" >Update plant</button>';
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