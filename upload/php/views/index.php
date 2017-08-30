<?php
    require_once("php/db.php");
    require("php/access.php");
    $acc = new Access();
    $hList = $acc->getHoldingsResourcesList();
    