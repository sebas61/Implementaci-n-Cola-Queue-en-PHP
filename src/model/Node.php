<?php

class Node{

private $value;
private $next;

public function __construct($value){
    $this->value = $value;
    $this->next = null;
}

public function getValue(){
    return $this->value;
}

public function getNext(){
    return $this->next;
}

public function setNext($next){
    return $this->next = $next;
}

public function setValue($value){
    return $this->value = $value;
}







}









?>