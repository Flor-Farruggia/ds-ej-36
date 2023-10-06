<?php
require_once '../../configuracion/database.php';
require_once '../../modelo/Persona.php';
require_once 'responses/consultarTodosResponse.php';

header('Content-Type: application/json');
$resp = new ConsultarTodosResponse();

$resp->ListPersona = Persona::BuscarTodas();


echo json_encode($resp);