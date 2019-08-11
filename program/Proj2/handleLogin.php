<?php
  
  class login {
      private $m_file;
      
      function __construct()
      {
          
      }
      
      function __destruct()
      {
          
      }
      
      private function validatePassword(&$uPassword)
      {
          $myfile = fopen("login.txt", "r") or die("Unable to open file!");
          $password = fgets($myfile);
          return (!strcmp($uPassword,$password) ? true: false );
      }
      
      private function validateUserName(&$uName)
      {
          return strlen($uName) > 0 ? true : false;
      }
      
      public function validateUser(&$uName,&$uPassword)
      {
          if ($this->validateUserName($uName) != true)
            return false;
            
          if ($this->validatePassword($uPassword) != true)
            return false;
            
           return true;     
      }
  }
?>
