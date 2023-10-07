<?php
class Persona
{

    public static function BuscarTodas()
    {
        $con  = Database::getInstance();
        $sql = "select * from personas";
        $queryClaseAReemplazar = $con->db->prepare($sql);
        $queryClaseAReemplazar->execute();
        $queryClaseAReemplazar->setFetchMode(PDO::FETCH_CLASS, 'Persona');

        $claseAReemplazarADevolver = array();

        foreach ($queryClaseAReemplazar as $m) {
            $claseAReemplazarADevolver[] = $m;
        }

        return $claseAReemplazarADevolver;
    }

    public static function Buscar($id)
    {
        $con  = Database::getInstance();
        $sql = "select * from personas where Id = :p1";
        $queryClaseAReemplazar = $con->db->prepare($sql);
        $params = array("p1" => $id);
        $queryClaseAReemplazar->execute($params);
        $queryClaseAReemplazar->setFetchMode(PDO::FETCH_CLASS, 'Persona');
        foreach ($queryClaseAReemplazar as $m) {
            return $m;
        }
    }

    public function Agregar()
    {
        $con  = Database::getInstance();
        $sql = "insert into Personas (Nombre, Apellido, NroDocumento, Direccion, Email) values (:p1,:p2, :p3, :p4, :p5)";
        $claseAReemplazar = $con->db->prepare($sql);
        $params = array("p1" => $this->Nombre, "p2" => $this->Apellido, "p3" => $this->NroDocumento, "p4" => $this->Direccion, "p5" => $this->Email);
        $claseAReemplazar->execute($params);
    }

    // public function Modificar()
    // {
    //     $con = Database::getInstance();
    //     $sql = "UPDATE [tablaAReemplazar]
    //                 SET
    //                 [propiedad1] = :p1,
    //                 [propiedad2] = :p2
    //                 WHERE Id = :p3";
    //     $claseAReemplazar = $con->db->prepare($sql);
    //     $params = array("p1" => $this->propiedad1, "p2" => $this->propiedad2, "p3" => $this->Id);
    //     $claseAReemplazar->execute($params);
    // }

    // public function Eliminar()
    // {
    //     $con = Database::getInstance();
    //     $sql = "DELETE FROM [tablaAReemplazar] WHERE Id = :p1";
    //     $claseAReemplazar = $con->db->prepare($sql);
    //     $params = array("p1" => $this->Id);
    //     $claseAReemplazar->execute($params);
    // }
}
