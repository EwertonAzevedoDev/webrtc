<?php

$socket = stream_socket_server("localhost:8080/");

while(true){
    $client = stream_socket_accept($socket);

    if($client){
        $name = stream_socket_get_name($client, false);
        echo 'Connected ' . $name . PHP_EOL;

        fpassthru($client);
        fclose($client);
    }
}