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
                    <input type="text">
                    <br><br>
                    <label for="">Tenant ID: </label>
                    <input type="text">
                    <br><br>
                    <label for="">First Name: </label>
                    <input type="text">
                    <br><br>
                    <label for="">Last Name: </label>
                    <input type="text">
                    <br><br>
                    <label for="">Civil Status: </label>
                    <input type="text">
                    <br><br>
                    <label for="">Occupation: </label>
                    <input type="text">
                    <br><br>
                </div>
                <div class = "moreinforight" style = "padding-right: 150px;">
                    <label for="">Contact no: </label>
                    <input type="text">
                    <br><br>
                    <label for="">Unit Number: </label>
                    <input type="text">
                    <br><br>
                    <label for="">No of Occupants: </label>
                    <input type="text">
                    <br><br>
                    <label for="">Downpayment: </label>
                    <input type="text">
                    <br><br>
                    <label for="">Advance Payment: </label>
                    <input type="text">
                    <br><br>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br><br>
                <br><br>
                <a href="<?=ROOT?>/unittenantadd">
                <input type="submit" value ="Add tenant" name ="add">
                </a>
                <a href="<?=ROOT?>/unitviewbtn">
                    <input type="submit" value="Back" name = "backbtn">
                </a>
                <br><br>

            </div>
        </form>
    </div>
<?php include "../app/views/partials/footer.php"; ?>