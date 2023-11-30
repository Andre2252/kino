<?php
   namespace App\Controllers;

   use App\Kernel\Controller\Controller;
   use App\Kernel\Validator\Validator;
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
         $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:50'],
         ]);

         if (! $validation) {
            dd('Validation failed', $this->request()->errors());
         }

         dd('Validation passed');
      }
   }

?>