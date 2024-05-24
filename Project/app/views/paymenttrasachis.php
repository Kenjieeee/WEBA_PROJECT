<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <h2>Payment Records</h2>
        <br><br>
        <div class = "labeladd">
            <br>
            <h2>Transaction History</h2>
        </div>
        <div class = "history">
            <table style = "border:solid 1px black; ">
                <div class = "srctxt">
                    <input type="text" name="" id="" style = "width: 20%; padding: 6px 14px; margin: 8px 0; box-sizing: border-box; float: left;" placeholder = "Enter Tenant Name">
                </div>
                <div class = "backbtn" >
                    <input type="submit" value="Search" style = "float: left; margin-right: 20px;">
                </div>
                <tr>
                    <!--SHOWING DATA lang ulit dine atee-->
                    <th>Unit No</th>
                    <th>Tenant Name</th>
                    <th>Due Date</th>
                    <th>Amount</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Kimberly Calumba</td>
                    <td>06/11/2024</td>
                    <td>P 5,000</td>                   
                </tr>
            </table>
        </div>
        <br><br>
        <div class = "backbtn">
            <a href="<?=ROOT?>/paymentrec">
                <input type="submit" value="Back">
            </a>
        </div>
    </div>



        <?php include "../app/views/partials/footer.php"; ?>