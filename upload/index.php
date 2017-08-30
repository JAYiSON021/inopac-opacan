<?php 
    session_start();
    require("php/views/index.php");
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

    <title>OPAC | Rizal High School</title>

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
    <?php include("includes/nav.php") ?>
    <div class="jumbotron">
        <div class="container">
        <center>
            <h2 class="home-head animated bounceIn" style="color:#fff">Want to learn something? <br> <small class="head-small">search your learning resource here</small></h2>
        </center>
                <br>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">

                        <div class="animated bounceIn panel panel-default">
                            <div class="panel-body">
                                <form action="search_next.php" method="POST">
                                    <div class="col-md-4">
                                        <select name="cat" class="form-control">
                                            <?php 
                                                while($row = $hList->fetch_array())
                                                {
                                                    echo "<option value='". $row['h_categories'] ."'>". $row['h_categories'] ."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="key" placeholder="Search resource Title, Author, etc. " required>
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="submit" name="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                            </span>
                                        </div><!-- /input-group -->
                                    </div>
                                    
                                </form>
                            </div> <!-- panel panel-default -->
                        </div>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
        </div>
    </div>

    <div class="container">
        <div class="row">
            
        </div>
    </div> <!-- /container -->
    <?php include("includes/footer.php"); ?>
    <!-- jQuery -->
    <script src="bootstrap/js/jquery-3.1.1.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    </script>
  </body>
</html>