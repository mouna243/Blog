<?php

namespace App\Model;
abstract class user{

private int $id ;
private string $nom;
private string $email;
private string $password;
private string $date_naissence;

private string $role;



// getters 
public function getid(){
return $this->id;

}
public function getname(){
    return $this->nom;
}
public function getemail(){
    return $this->email;
}
public function getpassword(){
    return $this->password;
}
public function getdatenee(){
    return $this->date_naissence;
}
public function getrole(){
    return $this->role;
}

}