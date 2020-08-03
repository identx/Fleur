<?php
include "include/class.catalog.php";
include "include/config.php";
include "include/fns_db.php";

db_connect();

$cat = new Catalog('mcat_');
$items = $cat->getItems();
krsort($items);

$all_cats = $cat->getCats($root=0);
ksort($all_cats);

include 'main.php';
?>