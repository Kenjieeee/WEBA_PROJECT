<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <h2>Unit Information</h2>
        <br><br>
        <div class = "labeladd">
            <br>
            <h2>VIEW UNIT #1</h2> <!-- dito atee ung unit num maiiba siya depende sa ivieview mo pong unit -->
        </div>
        <div class = "textboxes">
            <label for="">UNIT NO: </label>
            <input type="text" name="unitid" readonly>
            <!--ditoo atee lahat ng input text may value dapat
            depends sa unit number tapos sa db nia kung ilan ung room
            ung status nia etc-->
            <br>
            <label for="">Status: </label>
            <input type="text" name="unitid" value="Available" readonly>
            <br>
            <label for="">Rent Price: </label>
            <input type="text" name="unitid" readonly>
            <br>
            <label for="">Living Room: </label>
            <input type="text" name="unitid" readonly>
            <br>
            <label for="">Bedroom: </label>
            <input type="text" name="unitid" readonly>
            <br>
            <label for="">Kitchen Room: </label>
            <input type="text" name="unitid" readonly>
            <br>
            <label for="">Bathroom: </label>
            <input type="text" name="unitid" readonly>
            <br>
            <label for="">Laundry Room: </label>
            <input type="text" name="unitid" readonly>
            <br>
            <label for="">Land Area: </label>
            <input type="text" name="unitid" readonly>
            <br>
            <br>
            <!-- ateee dito po sa may tenant diba po nag view po tayo dun sa unit
            ung button po natoo maiiba iba po siya depende sa status pag
            available po ung unit na naview na add tenant poo siya pag occupied
            view tenant naman po magigng value po niya
            pero as of now add tenant po muna nilagay kong value dito para may laman lang
            since wala papong db -->
            <input type="submit" value = "Add tenant" name = "submit">
            <a href="<?=ROOT?>/unitinfo">
                <input type="submit" value="Back" >
            </a>
            <br><br>
            
        </div>




        <?php include "../app/views/partials/footer.php"; ?>