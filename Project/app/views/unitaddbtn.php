<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <h2>Unit Information
            <a href="" class = "addunit">
                <input type="submit" value="Add Unit">
            </a>
        </h2>
        <br><br>
        <div class = "labeladd">
            <br>
            <h2>ADD NEW UNIT</h2>
        </div>
        <div class = "textboxes">
            <label for="">UNIT NO: </label>
            <input type="text" name="unitid" placeholder = "Enter unit number">
            <br>
            <label for="">Status: </label>
            <input type="text" name="unitid" value="Available" placeholder = "Enter unit status">
            <br>
            <label for="">Rent Price: </label>
            <input type="text" name="unitid" placeholder = "Enter unit rent price">
            <br>
            <label for="">Living Room: </label>
            <input type="text" name="unitid" placeholder = "Unit have living room?">
            <br>
            <label for="">Bedroom: </label>
            <input type="text" name="unitid" placeholder = "Unit have bedroom?">
            <br>
            <label for="">Kitchen Room: </label>
            <input type="text" name="unitid" placeholder = "Unit have kitchen room?">
            <br>
            <label for="">Bathroom: </label>
            <input type="text" name="unitid" placeholder = "Unit have bathroom?">
            <br>
            <label for="">Laundry Room: </label>
            <input type="text" name="unitid" placeholder = "Unit have laundry room?">
            <br>
            <label for="">Land Area: </label>
            <input type="text" name="unitid" placeholder = "Size of land area by m2">
            <br>
            <br>
            <input type="submit" value = "Add new unit" name = "submit">
            <a href="<?=ROOT?>/unitinfo">
                <input type="submit" value="Back" >
            </a>
            <br><br>
            
        </div>




        <?php include "../app/views/partials/footer.php"; ?>