<?php 
    if (mysqli_num_rows($MagList) < 1) {
        echo "<center><h3 style='color:#DDDDDD;'>No Results Found<h3><center>";
    } else {
?>
    <div class="row">
        <div class="resource-name">
            <h4 style="color:#5A5A5A;"><?php echo "Search Specific ".$_SESSION['cat']; ?><h4>
        </div>
    </div>
    <div class="row">
    <div class="col-lg-12 panel panel-default">
        <div class="panel-body">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="col-md-4 col-sm-4">
                   <div class="input-group">
                        <input type="text" name="magkey" class="form-control" placeholder="Enter your search key" required>
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit" name="magazine"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </span>
                    </div><!-- /input-group -->
                </div>
                <div class="col-md-8 col-sm-8" style="margin-top: 6px !important;">
                    <label class="radio-inline">
                      <input type="radio" checked="checked" name="searchMagField" id="mag_title" value="mag_title"> Title
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="searchMagField" id="mag_publisher" value="mag_publisher"> Publisher
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="searchMagField" id="call_number" value="call_number"> Call Number
                    </label>
                </div>
                
            </form>
        </div> <!-- panel panel-default -->
    </div>
    </div>

    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Volume</th>
                        <th>Quantity</th>
                        <th>Publisher</th>
                        <th>Issued Date</th>
                        <th>Available</th>
                        <th>Library Section</th>
                        <th>Call Number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $num = 1;
                        while($row = $MagList->fetch_array())
                        {
                            echo "<tr>
                                <td>". $num ."</td>
                                <td>". $row['mag_title'] ."</td>
                                <td>". $row['mag_volume'] ."</td>
                                <td>". $row['mag_quantity'] ."</td>
                                <td>". $row['mag_publisher'] ."</td>
                                <td>". $row['mag_issued_date'] ."</td>
                                <td>". $row['mag_available'] ."</td>
                                <td>". $row['mag_section'] ."</td>
                                <td>". $row['call_number'] ."</td>
                                </tr>";
                            $num++;
                        }
                    ?>
                    <tr>
                    
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php 
    }
?>