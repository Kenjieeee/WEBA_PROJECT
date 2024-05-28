<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <h2>Tenant Information</h2>
        <br><br>
    <div class = "labeladd">
        <br>
        <h2>ADD TENANT</h2>
        <br><br>
    </div>
        <form method = "POST">
            <div class = "textboxes">
            <br><br>
                <div class = "moreinfoleft" style = "padding-left: 100px;">
                    <label for="">Unit Rent Price: </label>
                    <input type="text" name="rentpermonth" value="<?=$price?>" readonly>
                    <br><br>
                    <!-- <label for="">Tenant ID: </label>
                    <input type="text" >
                    <br><br> -->
                    <label >First Name: </label>
                    <input type="text" name="firstname" required>
                    <br><br>
                    <label >Last Name: </label>
                    <input name="lastname" type="text" required>
                    <br><br>
                    <label for="">Civil Status: </label>
                    <select name="status" required>
                        <option value=""></option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                    </select>
                    <br><br>
                    <label >Occupation: </label>
                    <input name="occupation" type="text" required>
                    <br><br>
                </div>
                <div class = "moreinforight" style = "padding-right: 150px;">
                    <label for="">Contact no: </label>
                    <input type="text" name="contactno" maxlength = "11" required>
                    <br><br>
                    <label for="">Unit Number: </label>
                    <input type="text" value="<?=$unitid?>" name="unitid" readonly>
                    <br><br>
                    <label for="">No of Occupants: </label>
                    <input type="text" name="occupants" required>
                    <br><br>
                    <label for="">Downpayment: </label>
                    <input type="text" name="downpayment" required>
                    <br><br>
                    <label for="">Advance Payment: </label>
                    <input type="text" name="advance" required>
                    <br><br>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br><br>
                <br><br>
               
                <div class = "backbtnplain">
                    <a href="<?=ROOT?>/unittenantadd">
                    <input type="submit" value ="Add tenant" name ="add">
                    </a>
                    <a href="<?=ROOT?>/unitviewbtn/<?=$unitid?>" class = "backbtnplain">
                    Back
                    </a>
                </div>
                
                <br><br>

            </div>
        </form>
    </div>
<?php include "../app/views/partials/footer.php"; ?>