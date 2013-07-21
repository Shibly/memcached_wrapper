<?php

require_once'memcache2.php';
$srv_stat = new cache_memcache();
$srv_stat->ServerStatus();