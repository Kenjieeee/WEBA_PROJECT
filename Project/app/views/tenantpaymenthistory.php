<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <h2>Tenant Information</h2>
        <br><br>
        <div class = "labeladd">
            <br>
            <h2>Payment History Tenant #1</h2>
            <!--ate dito po may showing paren ng tenant num-->
        </div>
        <div class = "history">
            <table style = "border:solid 1px black; ">
                <tr>
                    <!--SHOWING DATA lang ulit dine atee-->
                    <th>Transaction No</th>
                    <th>Due Date</th>
                    <th>Amount Paid</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>06/11/2024</td>
                    <td>p 5,000</td>                    
                </tr>
            </table>
        </div>
        <br><br>
        <div class = "backbtn">
            <a href="<?=ROOT?>/tenantmoreinfo">
                <input type="submit" value="Back">
            </a>
        </div>
    </div>



        <?php include "../app/views/partials/footer.php"; ?>