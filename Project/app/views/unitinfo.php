<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <h2>Unit Information
            <a href="<?=ROOT?>/unitaddbtn" class = "addunit">
                <input type="submit" value="Add Unit">
            </a>
        </h2>
        
        <br><br>
        <div class = "units">
            <table style = "border:solid 1px black; ">
                <tr>
                    <th>Unit No</th>
                    <th>Status</th>
                    <th>Click</th>
                </tr>
                <?php foreach($data as $row){ ?>
                    <tr>
                        <td><?= $row->unitid?></td>
                        <td><?= $row->availability?></td>
                        <td><a href="<?=ROOT?>/unitviewbtn/<?= $row->unitid?>"><input type="submit" value="View"></a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
<?php include "../app/views/partials/footer.php"; ?>