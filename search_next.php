<?php 
    session_start();
    require("php/views/search_next.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/travenue.ico">

    <title>OPAC | RHS: Search <?php echo $_SESSION['cat'];?></title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap-social/bootstrap-social.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
  </head>

  <body>
  <?php include("includes/nav_search.php") ?>
    <div id="wrapper">
        
        <div class="container">
            <div class="row">
                <div class="content-search-next">
                    <div class="col-lg-12 panel panel-default">
                        <div class="panel-body">
                            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                                <div class="col-md-2 col-sm-2">
                                    <h5>General Search</h5>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <select name="cat" class="form-control">
                                        <?php 
                                            while($row = $hList->fetch_array())
                                            {
                                                echo "<option";
                                                if (isset($_SESSION['cat'])) { if($_SESSION['cat'] == $row['h_categories']) { echo " selected"; }}
                                                echo " value='". $row['h_categories'] ."'>". $row['h_categories'] ."</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-7 col-sm-7">
                                    <div class="input-group">
                                        <input type="text" 
                                        name="key"
                                        <?php if (isset($_SESSION['key'])) { echo " value='". $_SESSION['key'] ."'"; } ?>
                                            class="form-control" placeholder="Search resource Title, Author, etc. " required>
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit" name="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                        </span>
                                    </div><!-- /input-group -->
                                </div>
                            </form>
                        </div>
                    </div><!-- panel panel-default -->
                    <div class="content-search-result col-lg-12 panel panel-default">
                        <div class="panel-body">

                            <?php
                                switch ($_SESSION['cat']) {
                                    case 'Book':
                                            include("php/views/book.php");
                                        break;

                                    case 'Magazines':
                                            include("php/views/magazine.php");
                                        break;

                                    default:
                                            include("php/views/book.php");
                                        break;
                                }
                            ?>
                            
                        </div>
                    </div> <!-- col-lg-12 panel panel-default -->
                </div>
                </div>
            </div>
        </div>

    </div> <!-- /wrapper -->
    <br>
    <?php include("includes/footer.php"); ?>
    <!-- jQuery -->
    <script src="bootstrap/js/jquery-3.1.1.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    </script>
    
  </body>
</html>
