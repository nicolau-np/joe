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

function setId($id){
    $this->id = $id;
}

function setNome($nome){
    $this->nome = $nome;
}

function setSexo($sexo){
    $this->sexo = $sexo;
}

function setEmail($email){
    $this->email = $email;
}

function setPalavra_passe($palavra_passe){
    $this->palavra_passe = $palavra_passe;
}

function setTelefone($telefone){
    $this->telefone = $telefone;
}

function setEstado($estado){
    $this->estado = $estado;
}

}