<?php
    require_once("php/db.php");
    require("php/access.php");

    $acc = new Access();
    $hList = $acc->getHoldingsResourcesList();
    if (isset($_POST['search'])) {
        $_SESSION['cat'] = $_POST['cat'];
        $_SESSION['key'] = $_POST['key'];

        $sql = '';
        if ($_SESSION['cat'] == 'Book') {
            $sql = "SELECT * FROM tbl_books WHERE b_title LIKE '%".$_SESSION['key']."%' OR b_author LIKE '%".$_SESSION['key']."%'";
            $BList = $acc->searchQuery($sql);
        } else {
            $sql = "SELECT * FROM tbl_magazines WHERE mag_title LIKE '%".$_SESSION['key']."%' OR mag_section LIKE '%".$_SESSION['key']."%'";
            $MagList = $acc->searchQuery($sql);
        }
    } else if (isset($_POST['book'])) {
        $sql = "SELECT * FROM tbl_books WHERE (b_title LIKE '%".$_SESSION['key']."%' OR b_author LIKE '%".$_SESSION['key']."%') AND ". $_POST['searchField'] ." LIKE '%". $_POST['bookey'] ."%'";
        $BList = $acc->searchQuery($sql);
    } else if (isset($_POST['magazine'])) {
        $sql = "SELECT * FROM tbl_magazines WHERE (mag_title LIKE '%".$_SESSION['key']."%' OR mag_section LIKE '%".$_SESSION['key']."%') AND ". $_POST['searchMagField'] ." LIKE '%". $_POST['magkey'] ."%'";
        $MagList = $acc->searchQuery($sql);
    } else {
        header("Location:index.php");
    }
