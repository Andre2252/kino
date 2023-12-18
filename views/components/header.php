<?php
/**
 * @var \App\Kernel\Auth\AuthInterface $auth
 */

$user = $auth->user();
?>
<header>
   <div style="background: #101010; 
      padding: 17px; 
      display: flex; 
      border-radius: 25px; 
      margin-top:-10px;">
      <div style="width: 300px;">
         <a style="color:#ffff00; 
         font-size: 36px; 
         font-weight: bold;
         text-decoration: none;"
         href="/">Kinopoisk-Love</a>
      </div>
      <div style=" width: 600px; word-spacing: 60px; margin-top: 10px;">
         <a style="color: #ffff; text-decoration: none; " href="/">ГЛАВНАЯ </a>
         <a style="color: #ffff; text-decoration: none;" href="/best">ЛУЧШЕЕ </a>
         <a style="color: #ffff; text-decoration: none;" href="/categories">ЖАНРЫ </a>
      </div>   
      <div style="margin-top: 10px;">
         <?php if ($auth->check()) { ?>
            <div>
               <a style="text-decoration: none; 
                  color: #ffff;
                  padding: 8px; 
                  margin-top: -10px;
                  border: 1px solid #DC143C; 
                  background: #DC143C;  
                  border-radius: 5px;
                  margin-left: 240px;
                  cursor: pointer;"
                  type="button"
                  class="icon-exit">Выйти
               </a>
            </div>
         <?php } else { ?>
            <a style="text-decoration: none; 
               color: #ffff;
               padding: 8px; 
               background: #404040; 
               border: 1px solid #ffff00; 
               border-radius: 5px;
               margin-left: 40px;
               cursor: pointer;"
               type="button" href="/login">Войти
            </a>
         
            <a style="text-decoration: none; 
               color: #000;
               padding: 8px; 
               background: #ffff00;
               border-radius: 5px;
               margin-left: 20px;
               cursor: pointer;"
               type="button" href="/register">Зарегистрироваться
            </a>
         <?php } ?>
      </div>
   </div>
   <a style="text-decoration: none; 
                  float:right;
                  margin-top: 10px;
                  background: #DC143C;
                  color: #ffff;">Name
               </a>
</header>