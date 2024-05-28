<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <h2>Tenant Information</h2>
        <br><br>
        <div class = "labeladd">
            <br>
            <h2>UDATE INFO FOR TENANT <?=$row->tenantid?></h2> <!-- dito atee ung unit num maiiba siya depende sa ivieview mo pong unit -->
        </div>
        <div class = "moreinfotextbox">
            <form method="POST">
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
                    <label for="">Firstname: </label>
                    <input type="text" name="firstname" value = "<?= $row->firstname?> ">
                    <br><br>
                    <label for="">Lastname: </label>
                    <input type="text" name="lastname" value = "<?= $row->lastname?>">
                    <br><br>
                    <label for="">Civil Status: </label>
                    <select name="status" required>
                        <option value=""></option>
                        <option <?=($row->status=="Single") ? "selected":""; ?> value="Single">Single</option>
                        <option  <?=($row->status=="Married") ? "selected":""; ?> value="Married">Married</option>
                    </select>
                    <br><br>
                    <label for="">Number of Occupants: </label>
                    <input type="text" name="occupants" value ="<?= $row->occupants?>" >
                    <br><br>
                    <label for="">Occupation: </label>
                    <input type="text" name="occupation" value = "<?=$row->occupation?>">
                    <br><br>
                    <label for="">Contact #: </label>
                    <input type="text" name="contactno" value = "<?=$row->contactno?>" >
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
            

                </div>
                <br><br><br><br><br><br><br> 
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>            
                <div class = "backbtnplain" style = "text-align: center;">
                <br>
                    <a style = "margin: 10px;">
                        <input type="submit" value="Update" name="btnupdate"style = "background-color: rgb(230, 172, 28, 1.0);border: none; cursor: pointer; text-decoration: none;">
                    </a>

                    <a style = "margin: 10px;" href="<?=ROOT?>/tenantmoreinfo/<?=$row->unitid?>">
                        Back
                    </a>
                </div>
            </form>

        </div>
        



        <?php include "../app/views/partials/footer.php"; ?>