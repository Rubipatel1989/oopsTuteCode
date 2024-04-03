<?php

// sudo apt-get install memcached
// extension=memcached.so

$memcached = new Memcached();
$memcached->addServer('localhost', 11211);

$memcached->set($key, $data, $expiration);
$data = $memcached->get($key);
memcached->delete($key);
