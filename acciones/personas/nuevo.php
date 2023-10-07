<?php
require_once '../../configuracion/database.php';
require_once '../../modelo/Persona.php';
require_once 'responses/nuevoResponse.php';
require_once 'request/nuevoRequest.php';


header('Content-Type: application/json');
$resp = new NuevoResponse();
$json = file_get_contents('php://input',true);
$req = json_decode($json);

$p = new Persona ();
$p->Nombre=$req->Nombre;
$p->Apellido=$req->Apellido;
$p->NroDocumento=$req->NroDocumento;
$p->Direccion=$req->Direccion;
$p->Email=$req->Email;
$p->Agregar();

$resp->IsOk=true;


echo json_encode($resp);