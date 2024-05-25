<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <form method="POST">

            <h2>Payment Records</h2>
            <br><br>
            <div class = "labeladd">
                <br>
                <h2>Transaction History</h2>
            </div>
            <div class = "history">
                <table style = "border:solid 1px black; ">
                    <div class = "srctxt">
                        <input type="text" name="txtsearch" id="" style = "width: 20%; padding: 6px 14px; margin: 8px 0; box-sizing: border-box; float: left;" placeholder = "Enter Tenant Name">
                    </div>
                    <div class = "backbtn" >
                        <input type="submit" name="btnsearch" value="Search" style = "float: left; margin-right: 20px;">
                    </div>
                    <tr>
                        <!--SHOWING DATA lang ulit dine atee-->
                        <th>Unit No</th>
                        <th>Tenant Name</th>
                        <th>Due Date</th>
                        <th>Amount</th>
                    </tr>
                    <?php if(!empty($data)){foreach($data as $row){?>
                    <tr>
                        <?php 
                            // $tenant = new Tenant();
                            // $arr['tenantid'] = $row->tenantid;
                            // $tenantData = $tenant->where($arr);
                            // $rowtenant=  $tenantData[0];
                        ?>
                        <td><?= $row->unitid ?></td>
                        <td><?= $row->tenantname ?></td>
                        <td><?= $row->duedate ?></td>
                        <td><?= $row->amount?></td>                   
                    </tr>

                    <?php }} ?>
                </table>
            </div>
            <br><br>
            <div class = "backbtn">
                <a href="<?=ROOT?>/paymentrec">
                    Back
                </a>
            </div>
        </form>
    </div>



        <?php include "../app/views/partials/footer.php"; ?>