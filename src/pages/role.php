<?php

$query = $dbh->query("SELECT * FROM role");
$roles = $query->fetchAll();