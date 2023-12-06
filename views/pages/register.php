<?php
/** 
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session 
*/
?>
<?php $view->component(name:'start') ?>
   <h1>Register</h1>

<form action="/register" method="POST">
   <p>Email-адрес</p>
   <input type="text" name="email">
   <?php if($session->has('email')) { ?>
         <ul>
            <?php foreach ($session->getFlash(key: 'email') as $error) { ?>
               <li style="color: red;"><?php echo $error ?></li>
            <?php } ?>
         </ul>
      <?php } ?>
   <p>Password</p>
   <input type="text" name="password">
   <?php if($session->has('password')) { ?>
         <ul>
            <?php foreach ($session->getFlash(key: 'password') as $error) { ?>
               <li style="color: red;"><?php echo $error ?></li>
            <?php } ?>
         </ul>
      <?php } ?>
   <button>Register</button>
</form>
<?php $view->component(name:'end') ?>
