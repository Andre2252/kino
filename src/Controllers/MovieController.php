<?php
   namespace App\Controllers;

   use App\Kernel\Controller\Controller;
   use App\Kernel\Http\Redirect;
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
         dd($this->session());

         $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:50'],
         ]);

         if (! $validation) {
            $this->redirect('/admin/movies/add');
            //dd('Validation failed', $this->request()->errors());
         }

         dd('Validation passed');
      }
   }

?>