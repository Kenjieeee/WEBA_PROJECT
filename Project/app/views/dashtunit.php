<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <h2>Dashboard</h2>
        <br><br><br><br>
       <div class = "dashtotalunit">
        <div class = "labeladd">
                <br>
                <h2>Total Units</h2>
            </div>
            
            <div class = "history">
                <table style = "border:solid 1px black; ">
                <div class = "dropdown">
                <select name="" id="" style = "float: left;">
                    <option value=""></option>
                    <option value="">Available</option>
                    <option value="">Occupied</option>
                </select>
                </div>
                <div class = "backbtn">
                    <input type="submit" value="Search">
                </div>
                    <tr>
                        <!--SHOWING DATA lang ulit dine atee-->
                        <th>Unit No</th>
                        <th>Unit Status</th>
                        <th>Rent Price</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Available</td>
                        <td>P 5,000</td>
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