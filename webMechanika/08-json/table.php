<table class="table">
             <tr>
            <th>Id</th> 
            <th>Manufacturer</th> 
            <th>Model</th> 
            <th>Year</th> 
            <th>Color</th> 
            <th>Mileage</th>
            <th>Fuel type</th> 
            <th>edit</th> 
            <th>delete</th> 
        </tr>
<?php $count = 0; foreach ($_SESSION['lot'] as $cars) {  ?>
            <tr>
            <td> <?= ++$count."/".$cars['id']  ?> </td>
                <td> <?= $cars['manufacturer']  ?> </td>
                <td> <?= $cars['model']  ?> </td>
                <td> <?= $cars['year']  ?> </td>
                 <td> <?= $cars['color']  ?> </td>
                  <td> <?= $cars['mileage']  ?> </td>
                  <td> <?= $cars['type']  ?> </td>
                <td><a class="btn btn-success" href="?id=<?= $cars['id']  ?>">edit</a></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$cars['id']?>"  >
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
</table>