<?php

require 'function.php';
require 'lib/nusoap.php';
//initialize server class
$server = new nusoap_server();
//configure WSDL(Web service description language)
$server->configureWSDL('requestAudio', 'urn:requestAudio');
//we have to register our function we are using to do processing on our webservice
$server->register(
        'audio', //name of our function
        $in = array('stationname' => 'xsd:string'), //inputs
        $out = array('return' => 'xsd:integer')//outputs
);
//server gets inputs sent by the client for processing which is stationname
$data = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
//then server class processes using the function ( called audio), included at the top-open function.php and see its name and return response to client
$server->service($data);
?>
