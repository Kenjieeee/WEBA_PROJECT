<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <h2>Tenant Information</h2>
        <br><br>
        <div class = "labeladd">
            <br>
            <h2>MORE INFO FOR TENANT #1</h2> <!-- dito atee ung unit num maiiba siya depende sa ivieview mo pong unit -->
        </div>
        <div class = "moreinfotextbox">
            <div class = "moreinfoleft">
                <!--SHOWING DATA ULIT :)-->
                <label for="">Rent Price: </label>
                <input type="text" name="rentprice" value = "P 5,200"readonly>
                <br><br>
                <label for="">Tenant ID: </label>
                <input type="text" name="tenantid" value = "1" readonly>
                <br><br>
                <label for="">Name: </label>
                <input type="text" name="name" value = "Kimberly Calumba"readonly>
                <br><br>
                <label for="">Civil Status: </label>
                <input type="text" name="cstatus" value = "Single"readonly>
                <br><br>
                <label for="">Number of Occupants: </label>
                <input type="text" name="occupants" value = "5"readonly>
                <br><br>
                <label for="">Occupation: </label>
                <input type="text" name="occupation" value = "Magbabakal"readonly>
                <br><br>
                <label for="">Contact #: </label>
                <input type="text" name="contant" value = "09915382110"readonly>
                <br><br>
            </div>
            <div class = "moreinforight">
                <label for="">Unit Status: </label>
                <input type="text" name="ustatus" value = "Occupied" readonly>
                <br><br>
                <label for="">Date Rented: </label>
                <input type="text" name="daterented" value = "11/05/2023"  readonly>
                <br><br>
                <label for="">Downpayment: </label>
                <input type="text" name="downpay" value = "P 10,000"readonly>
                <br><br>
                <label for="">Advance Payment: </label>
                <input type="text" name="advpay" value = "P 10,000"readonly>
                <br><br>
                <label for="">Balance: </label>
                <input type="text" name="bal" value = "P 0"readonly>
                <br><br>
                <label for="">Rent Status: </label>
                <input type="text" name="rstatus" value = "Paid"readonly>
                <br><br>
                <label for="">Due Date: </label>
                <input type="text" name="duedate" value = "06/05/2024"readonly>
                <br><br>
            
            
            
            </div>
            <br><br><br><br><br><br><br> 
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>            
            <div class = "backbtn" style = "text-align: center;">
                <a href="">
                    <!--dito naman ate melai gagawa pako ng file pero simple lg to
                lahat ng transaction lg nung specific id or tenant ung lalabas dine -->
                    <input type="submit" value="Payment" >
                </a>
                <a href=""><!--dito ate melai ireremove na ung tenant tapos
            ung data na ireremove mo di siya permanent madedelete sa tenant history
        siya mapupuntaaa-->
                    <input type="submit" value="Remove" >
                </a>
                <a href="<?=ROOT?>/tenantinfo">
                    <input type="submit" value="Back" >
                </a>
            </div>

        </div>
        



        <?php include "../app/views/partials/footer.php"; ?>