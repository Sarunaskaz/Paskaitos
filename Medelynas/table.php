<table class="table">
             <tr>
            <th>Id</th> 
            <th>Manufacturer</th> 
            <th>Model</th> 
            <th>Year</th> 
        </tr>
<?php $count = 0; foreach (getData() as $medelynas) {  ?>
            <tr>
            <td> <?= ++$count."/".$medelynas['id']  ?> </td>
                <td> <?= $medelynas['manufacturer']  ?> </td>
                <td> <?= $medelynas['model']  ?> </td>
                <td> <?= $medelynas['year']  ?> </td>
                <td><a class="btn btn-success" href="?id=<?= $medelynas['id']  ?>">edit</a></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$medelynas['id']?>"  >
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
</table>