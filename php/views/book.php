<?php 
    if (mysqli_num_rows($BList) < 1) {
        echo "<center><h3 style='color:#DDDDDD;'>No Results Found<h3><center>";
    } else {
?>
    <div class="row">
        <div class="resource-name">
            <h5 style="color:#5A5A5A;"><?php echo "Search Specific ".$_SESSION['cat']; ?><h5>
        </div>
    </div>
    <div class="row">
    <div class="col-lg-12 panel panel-default">
        <div class="panel-body">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="col-md-4 col-sm-4">
                   <div class="input-group">
                        <input type="text" 
                        name="bookey" class="form-control" placeholder="Enter your search key" required>
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit" name="book"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </span>
                    </div><!-- /input-group -->
                </div>
                <div class="col-md-8 col-sm-8" style="margin-top: 6px !important;">
                    <label class="radio-inline">
                      <input type="radio" checked="checked" name="searchField" id="b_title" value="b_title"> Title
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="searchField" id="b_author" value="b_author"> Author
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="searchField" id="b_publisher" value="b_publisher"> Publisher
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="searchField" id="b_code" value="b_code"> Book Code
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="searchField" id="b_section" value="b_section"> Library Section
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="searchField" id="call_number" value="call_number"> Call Number
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
                        <th>Author</th>
                        <th>Pages</th>
                        <th>Quantity</th>
                        <th>Publisher</th>
                        <th>Publication Date</th>
                        <th>Publication Place</th>
                        <th>ISBN</th>
                        <th>Available</th>
                        <th>Library Section</th>
                        <th>Call Number</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $num = 1;
                        while($row = $BList->fetch_array())
                        {
                            echo "<tr>
                                <td>". $num ."</td>
                                <td>". $row['b_title'] ."</td>
                                <td>". $row['b_author'] ."</td>
                                <td>". $row['b_pages'] ."</td>
                                <td>". $row['b_qty'] ."</td>
                                <td>". $row['b_publisher'] ."</td>
                                <td>". $row['b_publication_date'] ."</td>
                                <td>". $row['b_publication_place'] ."</td>
                                <td>". $row['ISBN'] ."</td>
                                <td>". $row['b_available'] ."</td>
                                <td>". $row['b_section'] ."</td>
                                <td>". $row['call_number'] ."</td>
                                <td><center><a href='#' class='btn btn default' data-toggle='modal' data-target='.bs-example-modal-sm'><i class='fa fa-sign-out'></i></a></center></td>
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


<!--modal-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content animated rotateIn">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="modal-title" id="myModalLabel"><i class="fa fa-book"></i> Book Info</h5>
        </div>
        <div class="modal-body">
            <center><h3 style="color: #DDDDDD;">Coming Soon</h3></center>
        </div>
        <div class="modal-footer">
            <a class="btn btn-primary" href="logout.php" data-dismiss="modal" role="button">Dismiss</a>
        </div>
    </div>
    </div>
</div>