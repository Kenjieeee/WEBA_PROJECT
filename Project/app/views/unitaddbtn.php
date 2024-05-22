<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <h2>Unit Information</h2>
        <br><br>
        <div class = "labeladd">
            <br>
            <h2>ADD NEW UNIT</h2>
        </div>
        <div class = "textboxes">
            <!--SHOWING DATA-->
            <form method="POST">

                <label for="">UNIT NO: </label>
                <input type="text" value= <?=$currentID?> placeholder = "Enter unit number" readonly>
                <br>
                <label for="">Status: </label>
                <input type="text" name="availability" value="Available" placeholder = "Enter unit status" readonly>
                <br>
                <label for="">Rent Price: </label>
                <input type="text" name="rent" placeholder = "Enter unit rent price">
                <br>
                <label for="">Living Room: </label>
                <input type="text" name="livingroom" placeholder = "Unit have living room?">
                <br>
                <label for="">Bedroom: </label>
                <input type="text" name="bedroom" placeholder = "Unit have bedroom?">
                <br>
                <label for="">Kitchen Room: </label>
                <input type="text" name="kitchenroom" placeholder = "Unit have kitchen room?">
                <br>
                <label for="">Bathroom: </label>
                <input type="text" name="bathroom" placeholder = "Unit have bathroom?">
                <br>
                <label for="">Laundry Room: </label>
                <input type="text" name="laundryroom" placeholder = "Unit have laundry room?">
                <br>
                <label for="">Land Area: </label>
                <input type="text" name="squaremeter" placeholder = "Size of land area by m2">
                <br>
                <br>
                <!--dito ateee add unit lahat ng data na iinput mapupunta sa
            db table units-->
                <input type="submit" value = "Add new unit" name = "save">
                <a href="<?=ROOT?>/unitinfo">
                    <input type="submit" value="Back" >
                </a>
                <br><br>

            </form>
        </div>




        <?php include "../app/views/partials/footer.php"; ?>