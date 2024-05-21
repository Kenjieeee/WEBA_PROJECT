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
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>Kimberly Calumba</td>
                    <td>09915382110</td>
                    <td>11/05/2023</td>
                    <td>02/03/24</td>
                    <td>P 2,000</td>
                </tr>
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