<?php

class Usuario{
    
private $id;
private $nome;
private $sexo;
private $email;
private $palavra_passe;
private $telefone;
private $estado;


function getId(){
    return $this->id;
}

function getNome(){
    return $this->nome;
}

function getSexo(){
    return $this->sexo;
}

function getEmail(){
    return $this->email;
}

function getPalavra_passe(){
    return $this->palavra_passe;
}

function getTelefone(){
    return $this->telefone;
}

function getEstado(){
    return $this->estado;
}



}