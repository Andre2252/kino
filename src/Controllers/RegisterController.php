<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class RegisterController extends Controller
{
   public function index(): void
   {
      $this->view(name: 'register');
   }

   public function register() //отвечает за добавление пользователя в базу
   {
      $validation = $this->request()->validate([
         'email' => ['required', 'email'],
         'password' => ['required', 'min:8']
      ]);

      if(! $validation) {
         foreach ($this->request()->errors() as $field => $errors) {
            $this->session()->set($field, $errors);
         }
         $this->redirect('/register');
      }

      $userId = $this->db()->insert('users', [
         'email' => $this->request()->input('email'),
         'password' => password_hash($this->request()->input(key: 'password'), algo: PASSWORD_DEFAULT),
      ]);

      dd('User created with id: ' . $userId);
   }
}
?>