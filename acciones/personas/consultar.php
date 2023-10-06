<?php
require_once '../../configuracion/database.php';
require_once '../../modelo/Persona.php';
require_once 'responses/consultarResponse.php';

header('Content-Type: application/json');
$resp = new ConsultarResponse();




echo json_encode($resp);