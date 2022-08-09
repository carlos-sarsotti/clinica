<?php

$CqOk2 = $_SESSION['CQ'] == $_REQUEST['CQ'];
$CqNum = $_SESSION['CQ'] + 1;
$_SESSION['CQ'] = $CqNum;
?>