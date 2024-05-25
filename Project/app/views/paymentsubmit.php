<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
    <form method="POST" action="<?=ROOT?>/paymentsubmit" >

        <h2>Payment Records</h2>
        <br><br>
        <div class = "paymentsubmit">
            <div class = "labeladd">
                <br>
                <h2>Submit Payment</h2>
            </div>
            <div class = "infocontainer">
                <div class = "tenantinfo">
                   <div class = "tenantinfolabel">
                        <h3>Tenant Information</h3>
                   </div>

                   <div class = "tenantinfodata">
                        <input type="hidden" name="tenantid" value="<?= $row->tenantid?>" readonly>
                        <label for="">Unit No: </label>
                        <input type="text" name="unitid" value="<?= $row->unitid?>" readonly>
                        <br><br>
                        <label for="">Tenant Name: </label>
                        <input type="text" name="tenantname" value="<?= $row->firstname?> <?= $row->lastname?>" readonly>
                        <br><br>
                        <label for="">Due Date: </label>
                        <input type="text" name="duedate" value="<?= $row->duedate?>" readonly>
                   </div>
                </div>
                <div class = "paymentsumm">
                    <div class = "paymentsummlabel">
                            <h3>Payment Summary</h3>
                    </div>
                    <div class = "paymentsummdata">
                        <label for="">Rent per month: </label>
                        <input type="text" name="rentpermonth" value="<?= $row->rentpermonth?>" readonly>
                        <br><br>
                        <label for="">Mode of payment: </label>
                        <select name="mode" >
                            <option value=""></option>
                            <option value="cash">Cash</option>
                            <option value="gcash">Gcash</option>
                            <option value="paypal">Paypal</option>
                            <option value="paymaya">Paymaya</option>
                            <option value="bank">Bank Transfer</option>
                            <option value="other">Other</option>   
                        </select>
                        <br><br>
                        <label for="">Month to be paid: </label>
                        <select name="month" >
                            <option value=""></option>
                            <option value="1">This Month</option>
                            <option value="2">2 Months(Advance 1 Month)</option>
                            <option value="3">3 Months(Advance 2 Month)</option>
                            <option value="4">4 Months(Advance 3 Month)</option>
                            <option value="5">5 Months(Advance 4 Month)</option>
                            <option value="6">6 Months(Advance 5 Month)</option>   
                        </select>
                        
                   </div>
                </div>
            
                <br><br>
            </div>
           
        </div>
        <br><br>
        <div class = "backbtn">
           
                <input type="submit" name="btnpayment" value="Submit Payment" style = "height: 40px;width: 150px;">
         
            <a href="<?=ROOT?>/paymentrec">
                <input type="submit" value="Back" style = "height: 40px;">
            </a>
        </div>

    </form>

    </div>



        <?php include "../app/views/partials/footer.php"; ?>