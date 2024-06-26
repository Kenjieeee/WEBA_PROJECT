<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <h2>Dashboard</h2>
        <br><br><br><br>
        <div class = "dashboardcontainer">
            <div class = "container">
                <div class = "totalunits">
                    <div class = "textdash">
                        <label class = "num"><?= $totalunit?></label><br><br>
                        <label>Total of Units</label>
                    </div>
                    <div class = "containerbtn">
                        <a href= "<?=ROOT?>/dashtunit" class = "Viewbtn">
                            <input type="submit" value="View">
                        </a>
                    </div>
                </div>
                <div class = "totaltenants">
                    <div class = "textdash">
                        <label class = "num"><?= $totaltenant?></label><br><br>
                        <label>Total of Tenants</label>
                    </div>
                    <div class = "containerbtn">
                        <a href= "<?=ROOT?>/dashttenants" class = "Viewbtn">
                            <input type="submit" value="View">
                        </a>
                    </div>
                </div>
                <div class = "totaldue">
                    <div class = "textdash">
                    <label class = "num"><?= $totalduedate?></label><br><br>
                    <label>Due Dates <br>Today</label>
                    </div>
                    <div class = "containerbtn">
                        <a href= "<?=ROOT?>/dashtduedate" class = "Viewbtn">
                            <input type="submit" value="View">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "../app/views/partials/footer.php"; ?>