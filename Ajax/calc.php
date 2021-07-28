<?php
if ($_GET["op"] == "add")
    echo "<h1> ".($_GET["fnum"] + $_GET["lnum"])."</h1>";
else if ($_GET["op"] == "sub")
    echo "<h1> ".($_GET["fnum"] - $_GET["lnum"])."</h1>";
?>