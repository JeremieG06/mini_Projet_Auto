<?php
class users
{
   private string $lastname;
   private string $firstname;
   private string $email;
   private string $password;


   public function __construct($lastname, $firstname, $email, $password)
   {
      $this->lastname = $lastname;
      $this->firstname = $firstname;
      $this->email = $email;
      $this->password = $password;


   }

   public function getlastname()
   {
      return $this->lastname;
   }

   public function getfirstname()
   {
      return $this->firstname;
   }

   public function getemail()
   {
      return $this->email;
   }
   public function getpassword()
   {
      return $this->password;
   }


   public function setlastname($lastname)
   {
      return $this->lastname = $lastname;
   }

   public function setfirstname($firstname)
   {
      return $this->firstname = $firstname;
   }

   public function setemail($email)
   {
      return $this->email = $email;
   }

   public function setpassword($password)
   {
      return $this->password = $password;
   }

}