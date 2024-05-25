<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <h2>Payment Records
        <a href="<?=ROOT?>/paymenttrasachis" class = "addunit">
                <input type="submit" value="Transaction History" style = "width: 150px;">
            </a>
        </h2>
        <br><br>
        <div class = "units">
            <table style = "border:solid 1px black; ">
                <tr>
                    <th>Unit No</th>
                    <th>Tenant Name</th>
                    <th>Due Date</th>
                    <th>Rent Per Month</th>
                    <th>Click</th>
                </tr>
                <?php if(!empty($data)){foreach($data as $row){?>
                <tr>
                    <!--dito ate ung sinasabi mong mag loloop kapoo-->
                    <td><?= $row->unitid ?></td>
                    <td><?= $row->firstname ?> <?= $row->lastname ?></td>
                    <td><?= $row->duedate ?></td>
                    <td><?= $row->rentpermonth ?></td>
                    <td><a href="<?=ROOT?>/paymentsubmit/viewdata/<?=$row->unitid?>"><input type="submit" value="Submit Payment" style = "width: 110px;"></a></td>
                </tr>
                <?php }} ?>
            </table>
        </div>

    </div>
<?php include "../app/views/partials/footer.php"; ?>