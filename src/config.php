<?php

/*
    All the equipements must be in the same LAN. 
    The current machine must be the default gateway for the clients.
*/
$routerA = "10.0.0.1"; // xDSL router
$routerB = "10.0.0.2"; // 4G router
$lanSubnet = "10.0.0.0/24"; 
$interface = "eth0"; // Name of the interface on this machine
$localIP = "10.0.0.254"; // LAN IP address on the interface above

const ROUTERA = 1;
const ROUTERB = 2;

 ?>
