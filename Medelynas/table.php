<table class="table">
             <tr>
            <th>Id</th> 
            <th>Augalo pavadinimas</th> 
            <th>Is yearling</th> 
            <th>Quantity</th> 
        </tr>
<?php $count = 0; foreach (getData() as $plant) {  ?>
            <tr>
            <td> <?= ++$count."/".$plant['id']  ?> </td>
                <td> <?= $plant['name']  ?> </td>
                <td> <?= $plant['is_yearling']  ?> </td>
                <td> <?= $plant['quantity']  ?> </td>
                <td><a class="btn btn-success" href="?id=<?= $plant['id']  ?>">edit</a></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$plant['id']?>"  >
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
</table>