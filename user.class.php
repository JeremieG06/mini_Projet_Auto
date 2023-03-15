<?php
class user {
private string $lastname;
private string $firstname;
private string $email;
private string $password;
}

public function __construct( $lastname,$firstname,$email,$password)
{
   $this->lastname = $lastname;
   $this->firstname = $firstname;
   $this-> email = $email;
   $this-> password = $password;
}
public function getlastname() {
 return   $this->lastname;
}

public function getfirstname() {
return   $this->firstname;
}

public function getemail() {
return   $this->email;
}
public function getpassword() {
    return  $this->password;
    }