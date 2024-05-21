<?php

$query = $dbh->query("SELECT * FROM diplomes");
$diplomas = $query->fetchAll();