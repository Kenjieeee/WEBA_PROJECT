<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <h2>Tenant Information</h2>
        <br><br>
        <div class = "labeladd">
            <br>
            <h2>MORE INFO FOR TENANT <?=$row->tenantid?></h2> <!-- dito atee ung unit num maiiba siya depende sa ivieview mo pong unit -->
        </div>
        <div class = "moreinfotextbox">
            <form action="<?=ROOT?>/Removetenant" method="POST">
                <div class = "moreinfoleft">
                    <!--SHOWING DATA ULIT :)-->
                    <input type="hidden" name="unitid" value="<?=$row->unitid?>" >
                    <input type="hidden" name="balance" value="<?=$row->balance?>" >
                    <label for="">Rent Price: </label>
                    <input type="text" name="rentpermonth" value ="<?= $row->rentpermonth?>" readonly>
                    <br><br>
                    <label for="">Tenant ID: </label>
                    <input type="text" name="tenantid" value = "<?= $row->tenantid?>" readonly>
                    <br><br>
                    <label for="">Name: </label>
                    <input type="text" name="name" value = "<?= $row->firstname?> <?= $row->lastname?>"readonly>
                    <br><br>
                    <label for="">Civil Status: </label>
                    <input type="text" name="cstatus" value = "<?= $row->status?>" readonly>
                    <br><br>
                    <label for="">Number of Occupants: </label>
                    <input type="text" name="occupants" value ="<?= $row->occupants?>" readonly>
                    <br><br>
                    <label for="">Occupation: </label>
                    <input type="text" name="occupation" value = "<?=$row->occupation?>"readonly>
                    <br><br>
                    <label for="">Contact #: </label>
                    <input type="text" name="contactno" value = "<?=$row->contactno?>" readonly>
                    <br><br>
                </div>
                <div class = "moreinforight">
                    <label for="">Unit Status: </label>
                    <input type="text" name="ustatus" value = "Occupied" readonly>
                    <br><br>
                    <label for="">Date Rented: </label>
                    <input type="text" name="starteddate" value = "<?=$row->starteddate?>"  readonly>
                    <br><br>
                    <label for="">Downpayment: </label>
                    <input type="text" name="downpay" value = "<?=$row->downpayment?>" readonly>
                    <br><br>
                    <label for="">Advance Payment: </label>
                    <input type="text" name="advpay" value = "<?=$row->advance?>"readonly>
                    <br><br>
                    <label for="">Balance: </label>
                    <input type="text" name="bal" value = "<?=$row->balance?>" readonly>
                    <br><br>
                    <label for="">Rent Status: </label>
                    <input type="text" name="rstatus" value = "Paid" readonly>
                    <br><br>
                    <label for="">Due Date: </label>
                    <input type="text" name="duedate" value = "<?=$row->duedate?>"readonly>
                    <br><br>
            
<<<<<<< HEAD
                </div>
                <br><br><br><br><br><br><br> 
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>            
                <div class = "backbtn" style = "text-align: center;">
                    <a href="">
                        <!--dito naman ate melai gagawa pako ng file pero simple lg to
                    lahat ng transaction lg nung specific id or tenant ung lalabas dine -->
                        <input type="submit" value="Payment" >
                    </a>
                    <!--dito ate melai ireremove na ung tenant tapos
                ung data na ireremove mo di siya permanent madedelete sa tenant history
            siya mapupuntaaa-->
                        <input type="submit" value="Remove" name="removebtn">
                   
                    <a href="<?=ROOT?>/tenantinfo">
                        <input type="submit" value="Back" >
                    </a>
                </div>
            </form>
=======
            
            
            </div>
            <br><br><br><br><br><br><br> 
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>            
            <div class = "backbtn" style = "text-align: center;">
                <a href="<?=ROOT?>/tenantpaymenthistory">
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

>>>>>>> 685288cc89e1253d1c0004cebdfab8f5d30f5c9b
        </div>
        



        <?php include "../app/views/partials/footer.php"; ?>