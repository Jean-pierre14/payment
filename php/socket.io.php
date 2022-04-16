<?php

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

// To check if the socket is created
if(!is_resource($socket)) onSocketFailure("Socket fail to be created");

// Another way
socket_connect($socket, "socket.php", 5000) or onSocketFailure("Failure to socket.php:5000", $socket);