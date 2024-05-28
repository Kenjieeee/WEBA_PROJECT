<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
    <form method="POST">
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
                <select name="availability"  style = "float: left;">
                    <option value=""></option>
                    <option value="Available">Available</option>
                    <option value="Occupied">Occupied</option>
                </select>
                </div>
                <div class = "backbtn">
                    <input name="btnsearch" type="submit" value="Search">
                </div>
                    <tr>
                        <!--SHOWING DATA lang ulit dine atee-->
                        <th>Unit No</th>
                        <th>Unit Status</th>
                        <th>Rent Price</th>
                    </tr>
                    <?php if(!empty($data)){foreach($data as $row){?>
                    <tr>
                        <td><?= $row->unitid?> </td>
                        <td><?= $row->availability?></td>
                        <td><?= $row->rent?></td>
                    </tr>
                    <?php }}  ?>
                </table>
            </div>
            <br><br>
            <div class = "backbtnplain">
                <a href="<?=ROOT?>/dashboard">
                   Back
                </a>
            </div>
       </div>
    </form>
    </div>
<?php include "../app/views/partials/footer.php"; ?>  