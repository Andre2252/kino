<?php

   namespace App\Kernel\View;

   class View 
   {
      public function page(string $name): void
      {

         $viewPath = APP_PATH."/views/pages/$name.php";

         if (!file_exists($viewPath)) {
            throw new \Exception(message:"View $name not found (Вид $name не найден)");
         }

         extract([
            'view' => $this,
         ]);
         
         include_once APP_PATH."/views/pages/$name.php";
      }
      
      public function component(string $name): void
      {
         include_once APP_PATH."/views/components/$name.php";
      }
   }
?>