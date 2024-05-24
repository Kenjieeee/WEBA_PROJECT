<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
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
                        <label for="">Unit No: </label>
                        <input type="text" name="" id="" readonly>
                        <br><br>
                        <label for="">Tenant Name: </label>
                        <input type="text" name="" id="" readonly>
                        <br><br>
                        <label for="">Due Date: </label>
                        <input type="text" name="" id="" readonly>
                   </div>
                </div>
                <div class = "paymentsumm">
                    <div class = "paymentsummlabel">
                            <h3>Payment Summary</h3>
                    </div>
                    <div class = "paymentsummdata">
                        <label for="">Rent per month: </label>
                        <input type="text" name="" id="" readonly>
                        <br><br>
                        <label for="">Mode of payment: </label>
                        <select name="" id="">
                            <option value=""></option>
                            <option value="">Cash</option>
                            <option value="">Gcash</option>
                            <option value="">Paypal</option>
                            <option value="">Paymaya</option>
                            <option value="">Bank Transfer</option>
                            <option value="">Other</option>   
                        </select>
                        <br><br>
                        <label for="">Month to be paid: </label>
                        <select name="" id="">
                            <option value=""></option>
                            <option value="">This Month</option>
                            <option value="">2 Months(Advance 1 Month)</option>
                            <option value="">3 Months(Advance 2 Month)</option>
                            <option value="">4 Months(Advance 3 Month)</option>
                            <option value="">5 Months(Advance 4 Month)</option>
                            <option value="">6 Months(Advance 5 Month)</option>   
                        </select>
                        
                   </div>
                </div>
                <br><br>
            </div>
           
        </div>
        <br><br>
        <div class = "backbtn">
            <a href="<?=ROOT?>/tenantinfo">
                <input type="submit" value="Submit Payment" style = "height: 40px;width: 150px;">
            </a>
            <a href="<?=ROOT?>/paymentrec">
                <input type="submit" value="Back" style = "height: 40px;">
            </a>
        </div>
    </div>



        <?php include "../app/views/partials/footer.php"; ?>