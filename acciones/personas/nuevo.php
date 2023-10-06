<?php
require_once '../../configuracion/database.php';
require_once '../../modelo/Persona.php';
require_once 'responses/nuevoResponse.php';

header('Content-Type: application/json');
$resp = new NuevoResponse();





echo json_encode($resp);