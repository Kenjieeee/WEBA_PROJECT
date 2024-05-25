<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <form method="POST" >
            <h2>Dashboard</h2>
            <br><br><br><br>
        <div class = "dashtotaltenant">
            <div class = "labeladd">
                    <br>
                    <h2>Total Tenants</h2>
                </div>
            
                <div class = "history">
                    <div class = "srctxt">
                        <input type="text" name="txtsearch" id="" style = "width: 20%; padding: 6px 14px; margin: 8px 0; box-sizing: border-box; float: left;" placeholder = "Enter Tenant Firstname/Lastname/ID">
                    </div>
                    <div class = "backbtn" >
                        <input type="submit" value="Search" name="btnsearch" style = "float: left; margin-right: 20px;">
                    </div>
                    <table style = "border:solid 1px black; ">
                        <tr>
                            <!--SHOWING DATA lang ulit dine atee-->
                            <th>Tenant ID</th>
                            <th>Unit No</th>
                            <th>Name</th>
                            <th>Started Date</th>
                        </tr>
                    <?php if(!empty($data)){foreach($data as $row){?>
                        <tr>
                            <td><?= $row->tenantid?></td>
                            <td><?= $row->unitid?></td>
                            <td><?= $row->firstname?> <?= $row->lastname?></td>
                            <td><?= $row->starteddate?></td>
                        </tr>
                    <?php }} ?>
                    </table>
                </div>
                <br><br>
                <div class = "backbtn">
                    <a href="<?=ROOT?>/dashboard">
                        Back
                    </a>
                </div>
        </div>
       </form>
    </div>
<?php include "../app/views/partials/footer.php"; ?>  