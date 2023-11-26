<?php

   namespace App\Kernel\View;

   //use App\Kernel\Auth\AuthInterface;
   //use App\Kernel\Exceptions\ViewNotFoundException;
   //use App\Kernel\Session\SessionInterface;
   //use App\Kernel\Storage\StorageInterface;
   class View 
   {
      public function page(string $name): void
      {
         include_once APP_PATH."/views/pages/$name.php";
      }
   }
?>