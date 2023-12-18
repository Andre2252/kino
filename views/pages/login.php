<?php
   /** 
    * @var \App\Kernel\View\ViewInterface $view 
    * @var \App\Kernel\Session\SessionInterface $session
    */
?>

<?php $view->component('start_simple'); ?>

<main>
   <div style="min-height: 100%; 
      display: flex; 
      align-items: center; 
      justify-content: center; 
      padding: 30px 10px;">
      <div style="background: #505050;
         max-width: 600px;
         padding: 20px;
         cursor: default;
         border-radius: 5px;
         margin: auto;
         position: relative;">
         <a style="position: absolute;
            right: 10px;
            top: 10px;
            font-size: 32px;
            color: #808080;
            text-decoration: none;
            cursor: pointer;
            margin-top: -10px;"
            href="/" class="popup_close close-popup">&times;
         </a><br>
         <style>
            .popup_close:hover {
               color: #000000 !important;
            }
         </style>
      
         <div>
            <center>
               <h4 style="margin-top: -20px; 
                  color: #fff;
                  font-size: 22px;
                  ">АВТОРИЗАЦИЯ ПОЛЬЗОВАТЕЛЯ:<hr>
               </h4>
            </center>
         </div>
         <?php if ($session->has('error')) { ?>
            <div style="color: #8B0000;
               font-family: Arial;
               margin-top: -20px;
               font-size: 14px;
               width: 400px;
               background-color: #F08080;
               padding: 10px;
               text-align:center;">
               <?php echo $session->getFlash('error') ?>
            </div><br>
         <?php } ?>

         <form action="/login" class="header_form" id="" method="post">
            <label class="ield_item">
               <input style="background-color: #fff;
                  width: 400px;
                  padding: 10px;
                  border-radius: 10px;" 
                  type="text" 
                  id="registration_email" 
                  name="email" 
                  class="form-control <?php echo $session->has('email') ? 'is-invalid' : '' ?>" 
                  placeholder="Введите Email-адрес"
               >
            </label><br>
            <?php if($session->has('email')) { ?>
            <div style="color: #FF0000;
               font-family: Arial;
               margin-top: 25px;
               font-size: 14px;
               text-align:center;"
               id="email" 
               class="invalid-feedback">
               <?php echo $session->getFlash('email')[0] ?>
            </div>
            <?php } ?><br>

            <label class="fiel_item">
               <input style="background-color: #fff;
                  width: 400px;
                  padding: 10px;
                  border-radius: 10px;" 
                  type="password" 
                  id="registration_password" 
                  name="password" 
                  class="form-control <?php echo $session->has('password') ? 'is-invalid' : '' ?>" 
                  placeholder="Введите пароль"
               >
            </label><br>
            <?php if($session->has('password')) { ?>
            <div style="color: #FF0000;
               font-family: Arial;
               margin-top:5px;
               font-size: 14px;
               text-align:center;"
               id="password" 
               class="invalid-feedback">
               <?php echo $session->getFlash('password')[0] ?>
            </div>
            <?php } ?><br>

            <div align="center" class="modal_footer_form_registration">
               <button style="width: 420px;
                  font-size: 16px;
                  padding: 8px;
                  border-radius: 10px;
                  cursor: pointer;
                  background-color: #ffff00;" 
                  type="submit" 
                  name="button_form_registration" 
                  class="modal_button_forms">Войти в Аккаунт
               </button><br>
            </div>
         </form>

         <style>
            .modal_footer_form_registration a {
               color: red;
               font-size: 20px;
            }

            .modal_footer_form_registration i {
               color: #ffff00;
               font-size: 15px;
            }
         </style>
      </div>
   </div>
</main>

<?php //$view->component('end_simple'); ?>