<?php include "../app/views/partials/header.php"; ?>
    <div class = "maincontent">
        <h2>Unit Information
            <a href="" class = "addunit">
                <input type="submit" value="Add Unit">
            </a>
        </h2>
        
        <br><br>
        <div class = "units">
            <table style = "border:solid 1px black; ">
                <tr>
                    <th>Unit No</th>
                    <th>Status</th>
                    <th>Click</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Available</td>
                    <td><a href=""><input type="submit" value="View"></a></td>
                </tr>
            </table>
        </div>
    </div>
<?php include "../app/views/partials/footer.php"; ?>