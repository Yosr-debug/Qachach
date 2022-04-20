<?php
class Reponse{

    
private $date=null;
private $description=null;
private $mail=null;
private $sujet=null;

public function __construct($date,$description,$mail,$sujet){

    $this->date=$date;
    $this->description=$description;
    $this->mail=$mail;
    $this->sujet=$sujet;

}
public function getdate(){
    return $this->date;
}
public function getdescription(){
    return $this->description;
}
public function getmail(){
    return $this->mail;
}
public function getsujet(){
    return $this->sujet;
}

public function setdate(string $date )
{
    $this->date=$date;
}
public function setdescription(string $description)
{
    $this->description=$description;
}
public function setmail(string $mail)
{
    $this->mail=$mail;
}
public function settsujet(string $sujet)
{
    $this->sujet=$sujet;
}






}











?>