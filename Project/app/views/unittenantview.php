<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <h2>Unit Information</h2>
        <br><br>
        <div class = "labeladd">
            <br>
            <h2>VIEW UNIT #2</h2>
        </div>
        <form method = "POST">
            <div class = "textboxes">
            <br><br>
                <div class = "moreinfoleft" style = "padding-left: 100px;">
                    <label for="">Unit Rent Price: </label>
                    <input type="text" value="<?= $row->rentpermonth ?>" readonly>
                    <br><br>
                    <label for="">Tenant ID: </label>
                    <input type="text"  value="<?= $row->tenantid  ?>" readonly>
                    <br><br>
                    <label for="">First Name: </label>
                    <input type="text" value="<?= $row->firstname  ?>" readonly>
                    <br><br>
                    <label for="">Last Name: </label>
                    <input type="text" value="<?= $row->lastname  ?>" readonly>
                    <br><br>
                    <label for="">Rent Status: </label>
                    <input type="text" value="<?= $row->status  ?>" readonly>
                    <br><br>
                    
                </div>
                <div class = "moreinforight" style = "padding-right: 150px;">
                    <label for="">Unit No: </label>
                    <input type="text" value="<?= $row->unitid  ?>" readonly>
                    <br><br>
                    <label for="">Unit Status: </label>
                    <input type="text" value="Occupied" readonly>
                    <br><br>
                    <label for="">Started Date: </label>
                    <input type="text" value="<?= $row->starteddate?>" readonly>
                    <br><br>
                    <label for="">Due Date: </label>
                    <input type="text" value="<?=$duedate?>"  readonly>
                    <br><br>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br>
                <br><br><br>
                <div class = "backbtnplain">
                    <a href="<?= ROOT ?>/unitviewbtn/<?=$row->unitid?>">
                        Back
                    </a>
                </div>
                
                
                <br><br>

            </div>
        </form>

                
    </div>
<?php include "../app/views/partials/footer.php"; ?>