<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <h2>Tenant Information
        <a href="<?=ROOT?>/tenanthistory" class = "addunit">
                <input type="submit" value="Tenant History">
            </a>
        </h2>
        
        <br><br>
        <div class = "units">
            <table style = "border:solid 1px black; ">
                <tr>
                    <th>Unit No</th>
                    <th>Tenant Name</th>
                    <th>Click</th>
                </tr>
                <?php if(!empty($data)) { foreach($data as $row){?>
                <tr>
                    <!--dito ate ung sinasabi mong mag loloop kapoo-->
                    <td><?=$row->unitid?></td>
                    <td><?=$row->firstname?> <?=$row->lastname?></td>
                    <td><a href="<?=ROOT?>/tenantmoreinfo/<?=$row->unitid?>"><input type="submit" value="More info"></a></td>
                </tr>

                <?php }}?>
            </table>
        </div>

        
    </div>
<?php include "../app/views/partials/footer.php"; ?>