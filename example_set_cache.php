<?php
require_once('memcache2.php');
$setData = new cache_memcache();
$data =  $setData->save("Shibly","Hello there ! you've stored me in a memcached server !");

if($data)
{
    echo "You've successfully stored data in the memcached server. Please Run the example_get_cache.php file to retrive your data";
}

else{
    echo "There is something wrong with your caching server";
}