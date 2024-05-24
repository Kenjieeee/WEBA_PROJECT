<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <h2>Tenant Information</h2>
        <br><br>
        <div class = "labeladd">
            <br>
            <h2>Tenant History</h2>
        </div>
        <div class = "history">
            <table style = "border:solid 1px black; ">
                <tr>
                    <!--SHOWING DATA lang ulit dine atee-->
                    <th>Tenant ID</th>
                    <th>Unit No</th>
                    <th>Tenant Name</th>
                    <th>Contact #</th>
                    <th>Date Rented</th>
                    <th>Leave Date</th>
                    <th>Balance</th>
                </tr>
                <?php if(!empty($data)){foreach($data as $row){?>
                <tr>
                    <td><?= $row->tenantid ?></td>
                    <td><?= $row->unitid ?></td>
                    <td><?= $row->name ?></td>
                    <td><?= $row->contactno?></td>
                    <td><?= $row->starteddate?></td>
                    <td><?= $row->leaveddate?></td>
                    <td><?= $row->balance?></td>
                </tr>
                <?php }}?>
            </table>
        </div>
        <br><br>
        <div class = "backbtn">
            <a href="<?=ROOT?>/tenantinfo">
                <input type="submit" value="Back">
            </a>
        </div>
    </div>



        <?php include "../app/views/partials/footer.php"; ?>