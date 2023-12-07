<?php
/** 
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session 
*/
?>

<?php $view->component('start') ?>
   <h1>Login</h1>

   <form action="/login" method="post">
      <?php if($session->has('error')) { ?>
         <p style="color: red;">
            <?php echo $session->getFlash('error') ?>
         </p>
      <?php } ?>
      <p>Email-адрес</p>
      <input type="text" name="email">
      <p>Password</p>
      <input type="text" name="password">
      <div>
         <button>login</button>
      </div>
   </form>
<?php $view->component(name:'end') ?>
