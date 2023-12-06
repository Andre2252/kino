<?php

namespace App\Kernel\Auth;
//use App\Kernel\Auth\AuthInterface;
use App\Kernel\Config\ConfigInterface;
use App\Kernel\Database\DatabaseInterface;
use App\Kernel\Session\SessionInterface;

class Auth implements AuthInterface
{
   public function __construct(
        private DatabaseInterface $database,
        private SessionInterface $session,
    ) {
    }
   public function attempt(string $username, string $password): bool
   {
      // TODO: Implement attempt() method.
   }

   public function logout(): void
   {
      // TODO: Implement logout() method.
   }

   //public function table(): string
   //{
      //return $this->config->get('auth.table', 'users');
   //}

   //public function username(): string
   //{
      //return $this->config->get('auth.username', 'email');
   //}

   //public function password(): string
   //{
      //return $this->config->get('auth.password', 'password');
   //}

   //public function sessionField(): string
   //{
      //return $this->config->get('auth.session_field', 'user_id');
   //}

   //public function id(): ?int
   //{
      //return $this->session->get($this->sessionField());
   //}
}
?>