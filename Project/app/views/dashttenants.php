<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <h2>Dashboard</h2>
        <br><br><br><br>
       <div class = "dashtotaltenant">
        <div class = "labeladd">
                <br>
                <h2>Total Tenants</h2>
            </div>
           
            <div class = "history">
                <div class = "srctxt">
                    <input type="text" name="" id="" style = "width: 20%; padding: 6px 14px; margin: 8px 0; box-sizing: border-box; float: left;" placeholder = "Enter Tenant Name">
                </div>
                <div class = "backbtn" >
                    <input type="submit" value="Search" style = "float: left; margin-right: 20px;">
                </div>
                <table style = "border:solid 1px black; ">
                    <tr>
                        <!--SHOWING DATA lang ulit dine atee-->
                        <th>Tenant ID</th>
                        <th>Unit No</th>
                        <th>Name</th>
                        <th>Started Date</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>Kimberly Calumba</td>
                        <td>05/11/2024</td>
                    </tr>
                </table>
            </div>
            <br><br>
            <div class = "backbtn">
                <a href="<?=ROOT?>/dashboard">
                    <input type="submit" value="Back">
                </a>
            </div>
       </div>
    </div>
<?php include "../app/views/partials/footer.php"; ?>  