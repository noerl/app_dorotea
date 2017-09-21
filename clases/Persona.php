<?php
require_once '../configuracion/Conexion.php';
/**
 * Description of Persona
 *
 * @author Fernando Díaz
 */
class Persona {
    // Tabla
    const TABLA = "01_usuario";
    
    // Atributos
    private $id;
    private $nombre;
    private $apeliidos;
    private $documento;
    private $correo;
    private $telefono;
    private $estado;
    
    // Get y Set
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApeliidos() {
        return $this->apeliidos;
    }

    function getDocumento() {
        return $this->documento;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEstado() {
        return $this->estado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApeliidos($apeliidos) {
        $this->apeliidos = $apeliidos;
    }

    function setDocumento($documento) {
        $this->documento = $documento;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

        
    // Constructor
    function __construct($nombre, $apeliidos, $documento, $correo, $telefono, $estado, $id = null) {
        $this->nombre = $nombre;
        $this->apeliidos = $apeliidos;
        $this->documento = $documento;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->estado = $estado;
        $this->id = $id;
    }

    // Metodos de la clase
}
