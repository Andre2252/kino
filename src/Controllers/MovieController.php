<?php
   namespace App\Controllers;

   use App\Kernel\Controller\Controller;
   use App\Kernel\View\View;

   class MovieController extends Controller
   {
      public function index(): void
      {
         $this->view(name: 'movies');
      }

      public function add(): void
      {
         $this->view(name: 'admin/movies/add');
      }

      public function store()
      {
         dd($this->request()->input('name'));
      }

   }

?>