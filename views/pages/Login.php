<?php
/** 
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session 
*/
?>
<?php $view->component(name:'start') ?>
   <h1>Login</h1>

   <form action="/register" method="POST">
      
      <?php if($session->has(key: 'error')) { ?>
         <p style="color: red;">
            <?php echo $session->getFlash(key: 'error') ?>
         </p>
      <?php } ?>
      <p>Email-адрес</p>
      <input type="text" name="email">
      <p>Password</p>
      <input type="text" name="password">
      <div>
         <button>Register</button>
      </div>
   </form>
<?php $view->component(name:'end') ?>
