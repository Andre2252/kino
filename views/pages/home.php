<?php
   /** @var \App\Kernel\View\View $view ...*/
?>

<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <title>Kinopoisk-Love: ГЛАВНАЯ</title>
</head>

<body style="background: #303030;">
   <header>
      <div style="background: #101010; 
         padding: 17px; 
         display: flex; 
         border-radius: 25px; 
         margin-top:-10px;">
         <div style="width: 300px;">
            <a style="color:#ffff00; font-size: 36px; font-weight: bold;">Kinopoisk-Love</a>
         </div>
         <div style=" width: 600px; word-spacing: 60px; margin-top: 10px;">
            <a style="color: #ffff; text-decoration: none; " href="/">ГЛАВНАЯ </a>
            <a style="color: #ffff; text-decoration: none;" href="/">ЛУЧШЕЕ </a>
            <a style="color: #ffff; text-decoration: none;" href="/">ЖАНРЫ </a>
         </div>   
         <div style="margin-top: 10px;">
            <a style="text-decoration: none; 
               color: #ffff;
               padding: 8px; 
               background: #404040; 
               border: 1px solid #ffff00; 
               border-radius: 5px;
               margin-left: 40px;
               cursor: pointer;"
               type="button">Войти
            </a>
         
            <a style="text-decoration: none; 
               color: #000;
               padding: 8px; 
               background: #ffff00;
               border-radius: 5px;
               margin-left: 20px;
               cursor: pointer;"
               type="button">Зарегистрироваться
            </a>
         </div>
      </div>
   </header>

   <div class="movies lock wrapper">
      <div class="movies_header lock-padding">
         <h1 style="margin-top: 25px; 
            font-family: Arial; 
            color: #fff;
            font-size: 24px;" 
            class="movies_header1">БЕСПЛАТНО: <a style="font-family: serif;" class="movies_header2">смотреть онлайн</a>
            <hr>
         </h1>
      </div>
      <style>
         hr {
            border: none; /* Убираем границу для браузера Firefox */
            color: red; /* Цвет линии для остальных браузеров */
            background-color: #666666; /* Цвет линии для браузера Firefox и Opera */
            height: 2px; /* Толщина линии */
            margin-top: 5px;
         }
      </style>

      <div class="movies_index">
         <div style="cursor: pointer;
               margin-top: 15px;
               border: none;
               background: #666666;
               padding: 16px;
               border-radius: 7px;
               font-size: 14px;
               box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.82);
               width: 225px;
               height: 370px;
               overflow: hidden;" 
            href="#myModal" class="free1_window popup-link">
            <img style="width: 225px;
               margin-top: 0px;
               border-radius: 10px;
               object-fit: cover;
               transition: 0.4s;"
            src="storage/movies/tor.jpg" class="movies_cover" alt="">
            <div style="margin-top: 7px; color: #fff;" class="modal_movie-title1 ">
               <center><a class="modal_movie-title ">"ТОР 2: ЦАРСТВО ТЬМЫ"</a><br>
                  <a style="" class="modal_movie-genre"> (marvel, США, 2013)</a>
               </center>
            </div>
            <div style="margin-top: 3px; color: #ffff00;" class="for_free ">
               <center><a class="for_free1">БЕСПЛАТНО</a></center>
            </div>
         </div>
      </div>

      <div class="movies_index">
         <div style="cursor: pointer;
               margin-top: 15px;
               border: none;
               background: #666666;
               padding: 16px;
               border-radius: 7px;
               font-size: 14px;
               box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.82);
               width: 225px;
               height: 370px;
               overflow: hidden;" 
            href="#myModal" class="free1_window popup-link">
            <img style="width: 225px;
               margin-top: 0px;
               border-radius: 10px;
               object-fit: cover;
               transition: 0.4s;"
            src="storage/movies/tor.jpg" class="movies_cover" alt="">
            <div style="margin-top: 7px; color: #fff;" class="modal_movie-title1 ">
               <center><a class="modal_movie-title ">"ТОР 2: ЦАРСТВО ТЬМЫ"</a><br>
                  <a style="" class="modal_movie-genre"> (marvel, США, 2013)</a>
               </center>
            </div>
            <div style="margin-top: 3px; color: #ffff00;" class="for_free ">
               <center><a class="for_free1">БЕСПЛАТНО</a></center>
            </div>
         </div>
      </div>

      <div class="movies_index">
         <div style="cursor: pointer;
               margin-top: 15px;
               border: none;
               background: #666666;
               padding: 16px;
               border-radius: 7px;
               font-size: 14px;
               box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.82);
               width: 225px;
               height: 370px;
               overflow: hidden;" 
            href="#myModal" class="free1_window popup-link">
            <img style="width: 225px;
               margin-top: 0px;
               border-radius: 10px;
               object-fit: cover;
               transition: 0.4s;"
            src="storage/movies/tor.jpg" class="movies_cover" alt="">
            <div style="margin-top: 7px; color: #fff;" class="modal_movie-title1 ">
               <center><a class="modal_movie-title ">"ТОР 2: ЦАРСТВО ТЬМЫ"</a><br>
                  <a style="" class="modal_movie-genre"> (marvel, США, 2013)</a>
               </center>
            </div>
            <div style="margin-top: 3px; color: #ffff00;" class="for_free ">
               <center><a class="for_free1">БЕСПЛАТНО</a></center>
            </div>
         </div>
      </div>

      <div class="movies_index">
         <div style="cursor: pointer;
               margin-top: 15px;
               border: none;
               background: #666666;
               padding: 16px;
               border-radius: 7px;
               font-size: 14px;
               box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.82);
               width: 225px;
               height: 370px;
               overflow: hidden;" 
            href="#myModal" class="free1_window popup-link">
            <img style="width: 225px;
               margin-top: 0px;
               border-radius: 10px;
               object-fit: cover;
               transition: 0.4s;"
            src="storage/movies/tor.jpg" class="movies_cover" alt="">
            <div style="margin-top: 7px; color: #fff;" class="modal_movie-title1 ">
               <center><a class="modal_movie-title ">"ТОР 2: ЦАРСТВО ТЬМЫ"</a><br>
                  <a style="" class="modal_movie-genre"> (marvel, США, 2013)</a>
               </center>
            </div>
            <div style="margin-top: 3px; color: #ffff00;" class="for_free ">
               <center><a class="for_free1">БЕСПЛАТНО</a></center>
            </div>
         </div>
      </div>
   </div>
</body>

</html>
