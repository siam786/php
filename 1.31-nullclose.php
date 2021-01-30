<?php

$default_lat = 20.3;
$lon = 9.23;

$user=10;

$lat = $user ?? $default_lat;
echo $lat;