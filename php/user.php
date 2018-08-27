<?php

class User {
   private $Nombre;
    private $Paterno;
    private $Materno;
    private $Rfc;
    private $Empresa;
    private $Email;
    private $Telefono;
    private $Curso;
    
  public  function __construct($nombre, $paterno, $materno, $rfc, $empresa, $email, $telefono, $curso){
        $this->Nombre = $nombre;
        $this->Paterno = $paterno;
        $this->Materno = $materno;
        $this->Rfc = $rfc;
        $this->Empresa = $empresa;
        $this->Email = $email;
        $this->Telefono = $telefono;    
        $this->Curso = $curso;
    }

    public function setNombre($nombre){
        $this->Nombre = $nombre;
    }

    public function getNombre(){
        return $this->Nombre ;
    }   

    public function setPaterno($paterno){
        $this->Paterno = $paterno;
    }

    public function getPaterno(){
        return $this->Paterno;
    }
    public function setMaterno($materno){
        $this->Materno = $materno;
    }
    public function getMaterno(){
        return $this->Materno;
    }
    public function setRfc($rfc){
        $this->Rfc = $rfc;
    }
    public function getRfc(){
        return $this->Rfc;
    }
    public function setEmpresa($empresa){
        $this->Empresa = $empresa;
    }
    public function getEmpresa(){
        return $this->Empresa;
    }
    public function setEmail($email){
        $this->Email = $email;
    }
    public function getEmail(){
        return $this->Email;
    }
    public function setTelefono($telefono){
        $this->Telefono = $telefono;
    }
    public function getTelefono(){
        return $this->Telefono;
    }
    public function setCurso($curso){
        $this->Curso = $curso;
    }
    public function getCurso(){
        return $this->Curso;
    } 
}



