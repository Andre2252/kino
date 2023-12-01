<?php

   namespace App\Kernel\View;

   use App\Kernel\Exceptions\ViewNotFoundException;
   use App\Kernel\Session\Session;

   class View 
   {
      public function __construct(
         private Session $session
      )
      {
      }

      public function page(string $name): void
      {
         $viewPath = APP_PATH."/views/pages/$name.php";

         if (!file_exists($viewPath)) {
            throw new ViewNotFoundException(message:"View: '$name' not found (Страница: '$name' не найдена)");
         }

         extract($this->defaultData());

         include_once $viewPath;
      }
      
      public function component(string $name): void
      {
         $componentPath = APP_PATH."/views/components/$name.php";

         if (! file_exists($componentPath)) {
            echo "Component: '$name' - not found ('$name' - не найден)";
            return;
         }

         include_once $componentPath; //APP_PATH."/views/components/$name.php";
      }

      private function defaultData(): array 
      {
         return [
            'view' => $this,
            'session' => $this->session,
         ];
      }
   }
?>