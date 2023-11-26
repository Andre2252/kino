<?php
   
   namespace App\Controllers;

   use App\Kernel\View\View;
   
   class MovieController
   {
      public function index(): void
      {
         //$this->view('movies');

         $view = new View();

         $view->page(name: 'movies');
      }
   }

?>