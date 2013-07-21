<?php

require_once'memcache2.php';
$getData = new cache_memcache ();
$res = $getData->get("Shibly");
if ($res) {
    echo $res;
} else {
    echo "No data to display. The cache may be destroyed";
}