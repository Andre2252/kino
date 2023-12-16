<?php
   /** 
    * @var \App\Kernel\View\ViewInterface $view 
    */
?>

<?php $view->component('start'); ?>

<main>
   <div style="min-height: 100%; 
      display: flex; 
      align-items: center; 
      justify-content: center; 
      padding: 30px 10px;
      background-color: rgba(0, 0, 0, 0.6);">
      <div style="background: rgba(300, 300, 300, 1);
         max-width: 600px;
         padding: 35px;
         cursor: default;
         border-radius: 5px;
         margin: auto;
         position: relative;
         transition: all 0.8s ease 0s;">
         <a href="/" class="popup_close close-popup">&times;</a><br>
         <div>
            <center>
               <h4 style="margin-top: -20px;">РЕГИСТРАЦИЯ ПОЛЬЗОВАТЕЛЯ:</h4>
            </center>
         </div>

         <div class="error_red">
            <p>
               <?php //echo $_SESSION['validation']['name'] 
               ?>
            </p>
         </div><br>

         <form action="/header/forms/registration/handler_registration.php" class="header_form" id="" method="POST">

            <label class="ield_ite">
               <input style="background-color: #fff;
                     " type="text" id="registration_name" name="name" class="form-control" <?php echo $_SESSION['validation']['name'] ? 'aria-invalid="true"' : '' ?> value="<?php echo @$data['name']; ?>">
               <span>Введите имя</span>
            </label>
            
            <center><a style="color: red;"><?php //echo $_SESSION['validation']['name']?></a></center>

            <label class="ield_item">
               <input style="background-color: #fff;" type="text" id="registration_email" name="email" class="form-control" value="<?php echo @$data['email']; ?>">
               <span>Введите email-адрес</span>
            </label>

            <label class="fiel_item">
               <input style="background-color: #fff;" type="password" id="registration_password" name="password" class="form-control" value="<?php echo @$data['password']; ?>">
               <span>Придумайте пароль</span>
            </label>

            <label class="fiel_item">
               <input style="background-color: #fff;" type="password" id="registration_password_control" name="password_control" class="form-control" value="<?php echo @$data['password_control']; ?>">
               <span>Повторите пароль</span>
            </label><br>

            <div align="center" class="modal_footer_form_registration">
               <button type="submit" name="button_form_registration" class="modal_button_forms" href="#popup_2">Зарегистрироваться</button>
               <a>*</a><br><br>
               <a>*</a><i>Нажимая "ЗАРЕГИСТРИРОВАТЬСЯ", Вы подтверждаете,<br>что прочитали и согласны с нашими Условиями Пользователя<br>и Политикой Конфиденциальности.</i>
            </div>
         </form>

         <style>
            .modal_footer_form_registration a {
               color: red;
               font-size: 20px;
            }

            .modal_footer_form_registration i {
               color: #600060;
               font-size: 15px;
            }
         </style>
      </div>
   </div>
</main>

<?php //$view->component('end'); ?>