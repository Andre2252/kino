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
         $data = ['name' => 'Andrej'];
         $rules = ['name' => ['required', 'min:3', 'max:255']];

         $validator = new Validator();

         dd($validator->validate($data, $rules), $validator->errors());

         dd($this->request()->input('name'));
      }

   }

?>