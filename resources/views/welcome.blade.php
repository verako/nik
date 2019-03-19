<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NIKS-M</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script> 
        <script src="js/script_hide.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark" id="header">
            <div class="container">
            <a class="navbar-brand" href="#"><img src="img/logo2.png" width="150px" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse scroll" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#header">ГЛАВНАЯ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">О НАС</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#products">ТОВАРЫ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#gallery">ГАЛЕРЕЯ</a>
                  </li>  
                  <li class="nav-item">
                    <a class="nav-link" href="#contacts">КОНТАКТЫ</a>
                  </li>  
                </ul>
            </div>
            <div class="contacts">
                <i class="fas fa-mobile-alt"></i> +380984884442, +380994884442 <br> 
                <i class="fas fa-envelope"></i> nikszakaz@gmail.com</div>
            </div>  
        </nav>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

 <!-- <div class="container"> -->
        <div class="bgimg-1">
            <div class="container">
                <div class="row">
                     <div class="col-6 logo2">
                        <img src="img/logo3.png" alt="logo">
                     </div>
                </div>
            </div>
        </div>
<!--About as-->
        <div class="container">        
            <div class="row" id="about">
                <div class="col-12 col-lg-6 aboutas">
                    <div  id="rectangle-left" ></div>
                    <h3>О НАС</h3>
                    <h5>Компания  Niks-M является представителем одного из самых крупных производителей металлопластиковых окон в Украине.</h5>
                    <div>Наша компания начала свой путь в 1997 году. Предприятие известно как завод металлопластиковых окон в Днепре. Но помимо производства металлопластиковых окон и дверей, компания также специализируется на окнах и дверях из алюминия. Наша продукция известна во многих регионах Украины и пользуется заслуженной популярностью среди потребителей.</div>
                    <div class="content">Мы уделяем максимальное количество вниманиявопросам качества, чтобы изделия служили нашим клиентам на протяжении долгого времени.<br>
                    Если вам нужны действительно качественные металлопластиковые окна и двери, а также комплектующие по приемлемой стоимости, вы всегда можете обратиться к нам. Мы гарантируем высокое качество наших изделий, а срок официальной гарантии составляет 5 лет.<br>
                    Мы создаем атмосферу, в которой нашим клиентам приятно работать с нами.</div>
                    <div class="toggle">Читать далее...</div>
                    <button class="contact"> <a href="">связаться с нами</a></button>
                </div>
                <div class="col-12 col-lg-6 about">
                </div>
            </div>
        </div>
<!--    1 -->
        <div class="bgimg-2">
          <div class="container">
              <div class="row">
                <div class="col-3 caption-1" >
                    <div  class="rectangle"  ></div>
                </div>
              </div>
              <div class="row">  
                  <div class="col-12 col-lg-6 caption">
                 
                  <span class="border-2">У Вас есть вопросы? Оставьте заявку и мы перезвоним!</span><br>
                  <button class="contact"><a href="">связаться с нами</a></button><br>
                  <span class="border-3">Наши контакты: тел.+380984884442, +380994884442  email:nikszakaz@gmail.com</span>
                  </div>
              </div>
          </div>
        </div>

<!-- produkts -->        
        <div class="products" style="position:relative;">
            <div class="container">
                <div class="row">
                    <div class="col-3 caption-white" >
                        <div  class="rectangle_white"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 caption-3" >
                        <h3>НАШИ ТОВАРЫ</h3>
                    </div>
                </div>

               <div class="carousel slide " data-ride="carousel" id="light">
               <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row vybor">
                           <!--  <div class="col-12 col-lg-1 "></div> -->
                            <div class="col-12 col-lg-3 ">                    
                                <div class="vybor1">
                                    <a href="">
                                        <img src="img/okna1.jpg" alt="">
                                        <h5>Металлопластиковые окна и двери </h5> 
                                    </a>  
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 ">                    
                                <div class="vybor1">
                                    <a href="">
                                        <img src="img/okna1.jpg" alt="">
                                        <h5>Алюминиевые окна и двери</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 ">                    
                                <div class="vybor1">
                                    <a href="">
                                        <img src="img/okna1.jpg" alt="">
                                        <h5>Роллетные ворота и решетки</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 ">                    
                                <div class="vybor1">
                                    <a href="">
                                        <img src="img/okna1.jpg" alt="">
                                        <h5>Офисные перегородки</h5>
                                    </a>
                                </div>  
                            </div>
                        </div>
                    </div>
                    
                </div><!-- /.carousel-inner -->
                    <a class="carousel-control-prev" href="#light" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#light" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
            </div>
            </div>
        </div>
<!-- Job -->
        <div class="job" style="position:relative;">
            <div class="container">
                <div class="row">
                    <div class="col-3 caption-1" >
                        <div  class="rectangle"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 caption-2" >
                        <h3>КАК МЫ РАБОТАЕМ</h3>
                    </div>
                </div>
                
                <div class="row no-gutters job2">
                    <div class="col-12 col-lg-3 circle">
                        
                            <div class="selection"></div>
                            <h5>Подбор окон</h5>
                        
                    </div>
                    <div class="col-12 col-lg-3 circle">
                       <!--  <div class="circle"> -->
                            <div class="froze"></div>
                            <h5>Замер</h5>
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-lg-3 circle">
                        <!-- <div class="circle"> -->
                            <div class="production"></div>
                            <h5>Производство</h5>
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-lg-3 circle">
                        <!-- <div class="circle"> -->
                            <div class="installation"></div>
                            <h5>Монтаж</h5>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
<!-- Vybor -->
        <!-- <div class="vybor" style="position:relative;">
            <div class="row">
                <div class="col-3 caption-1" style="top:10%">
                <div  class="rectangle1"></div>                
            </div>
            <div class="row">
                <div class="col-6 col-lg-6 caption">
                   <h3>ПРИ ВЫБОРЕ ОКОН НЕОБХОДИМО ОБРАТИТЬ ВНИМАНИЕ НА:</h3> 
                </div>
            </div>
            </div>
            <div class="row no-gutters job2">
                <div class="col-12 col-lg-4 ">                    
                    <div class="vybor1"><img src="img/vybor1.png" alt=""></div>
                    <h5>Профиль ПВХ</h5>
                    <p>Лучшим производителем профильных систем считаются немецкие фирмы, с безукоризненной репутацией. При изготовлении используются качественные экологически чистые компоненты, не содержащие тяжелые металлы (свинец).</p>                    
                </div>
                <div class="col-12 col-lg-4 ">
                    <div class="vybor1"><img src="img/vybor2.png" alt=""></div>
                    <h5>Стеклопакет</h5> 
                    <p>Стеклопакет занимает наибольшую площадь в окне, поэтому к нему самые большие требования. Стекло должно быть марки М1, М0 с напылением ионов серебра для хорошей защиты от холода и сохранения тепла.</p>                   
                </div>
                <div class="col-12 col-lg-4 ">                 
                    <div class="vybor1"><img src="img/vybor3.png" alt=""></div>
                    <h5>Фурнитура</h5>  
                    <p>Наиболее качественной считается фурни- тура произведённая в Германии. Передовые технологии, использование качественного металла, инженерные решения и нано- покрытие - это залог длительной и комфортной эксплуатации окна, а также защита от взлома.</p>                  
                </div>
            </div>
        </div> -->
<!-- products -->
        <!-- <div class="products" id="products" style="position:relative;">
            <div class="row no-gutters">
                <div class="col-12 col-lg-6 product1">
                </div>
                <div class="col-12 col-lg-6 product">
                    <div  id="rectangle-right" ></div>
                    <h3>НАШИ ТОВАРЫ</h3>
                    <h5>Ассортимент предлагаемой нами продукции достаточно широк и включает в себя:</h5>
                     <ul>
                         <li>Металлопластиковые окна и двери (стандартные белые или ламинированные);</li>
                         <li>Алюминиевые окна и двери;</li>
                         <li>Фурнитуру и москитные сетки для окон и дверей;</li>
                         <li>Подоконники и отливы для окон;</li>
                         <li>Нестандартные конструкции из ПВХ и алюминия;</li>
                         <li>Холодное и теплое остекление балконов и лоджий металлопластиком и алюминием, безрамное остекление;</li>
                         <li>Роллетные ворота и решетки, автоматические ворота, рольставни;</li>
                         <li>Офисные перегородки, раздвижные системы, накрытия для бассейнов;</li>
                         <li>Автоматические окна и двери.</li>
                     </ul>   
                    
                </div>                
            </div>
        </div> -->

<!-- Gallery -->
        <span id="gallery"></span>
        <div class="examples"  style="position:relative;">
            <div class="row no-gutters">
                <div class="col-12 col-lg-3 picture"><a href="#lightbox1" data-toggle="modal" class="pic"><img class="gallery" src="img/gallery1.jpg" alt=""></a></div>
                <div class="col-12 col-lg-3 picture"><a href="#lightbox1" data-toggle="modal" class="pic"><img class="gallery" src="img/gallery2.jpg" alt=""></a></div>
                <div class="col-12 col-lg-3 picture"><a href="#lightbox1" data-toggle="modal" class="pic"><img class="gallery" src="img/gallery3.jpg" alt=""></a></div>
                <div class="col-12 col-lg-3 picture"><a href="#lightbox1" data-toggle="modal" class="pic"><img class="gallery" src="img/gallery4.jpg" alt=""></a></div>
            </div>
            <div class="row no-gutters">
                <div class="col-12 col-lg-3 picture"><a href="#lightbox1" data-toggle="modal" class="pic"><img class="gallery" src="img/gallery5.jpg" alt=""></a></div>
                <div class="col-12 col-lg-3 picture"><a href="#lightbox1" data-toggle="modal" class="pic"><img class="gallery" src="img/gallery6.jpg" alt=""></a></div>
                <div class="col-12 col-lg-3 picture"><a href="#lightbox1" data-toggle="modal" class="pic"><img class="gallery" src="img/gallery7.jpg" alt=""></a></div>
                <div class="col-12 col-lg-3 picture"><a href="#lightbox1" data-toggle="modal" class="pic"><img class="gallery" src="img/gallery9.jpg" alt=""></a></div>
            </div>
        </div>
    <!-- carousel -->    
        <div class="container">
            <div class="modal fade and carousel slide" id="lightbox1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="img/gallery1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img src="img/gallery2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img src="img/gallery3.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                          <img src="img/gallery4.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                          <img src="img/gallery5.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                          <img src="img/gallery6.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                          <img src="img/gallery7.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                          <img src="img/gallery9.jpg" alt="Third slide">
                        </div>
                      </div><!-- /.carousel-inner -->
                      <a class="carousel-control-prev" href="#lightbox1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#lightbox1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a>
                    </div><!-- /.modal-body -->
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
    <!-- carousel mobile -->
            <div class="carousel slide mobilever" data-ride="carousel" id="lightbox">
               <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/gallery1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery3.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery4.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery5.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery6.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery7.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery9.jpg" alt="Second slide">
                    </div>
                </div><!-- /.carousel-inner -->
                    <a class="carousel-control-prev" href="#lightbox" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#lightbox" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
            </div>
        </div><!-- /.container -->
<!-- 2 -->
        <div class="bgimg-3" id="contacts">
          <div class="row">
            <div class="col-3 caption-1" >
                <div  class="rectangle"  ></div>
            </div>
          </div>
          <div class="row">  
              <div class="col-12 col-lg-6 caption">             
                <span class="border-2">У Вас остались вопросы? <span class="mob">Оставьте заявку и мы перезвоним!</span> </span><br>
                <button class="contact"><a href="">связаться с нами</a></button><br>
                <span class="border-3">Наши контакты: тел.+380984884442, +380994884442  email:nikszakaz@gmail.com</span>
              </div>
          </div>
        </div>

<!-- reviews -->


<!-- certificates -->
    <div id="certificates" style="position:relative;">
        <div class="container">
            <div class="row">
                <div class="col-3 caption-white" >
                    <div  class="rectangle_white"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 caption-3" >
                    <h3>СЕРТИФИКАТЫ</h3>
                </div>
            </div>
            <div class="examples"  style="position:relative;">
                <div class="row ">
                    <div class="col-12 col-lg-3 picture vybor1">
                        <a href="#lightbox2" data-toggle="modal" ><img class="certificat" src="img/cert11.jpg" alt=""></a>
                    </div>
                    <div class="col-12 col-lg-3 picture vybor1">
                        <a href="#lightbox2" data-toggle="modal" ><img class="certificat" src="img/cert22.jpg" alt=""></a>
                    </div>
                    <div class="col-12 col-lg-3 picture vybor1">
                        <a href="#lightbox2" data-toggle="modal" ><img class="certificat" src="img/cert33.jpg" alt=""></a>
                    </div>
                    <div class="col-12 col-lg-3 picture vybor1">
                        <a href="#lightbox2" data-toggle="modal" ><img class="certificat" src="img/cert444.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    <!-- carousel -->    
        <div class="container">
            <div class="modal fade and carousel slide" id="lightbox2">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="img/cert11.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img src="img/cert22.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img src="img/cert33.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                              <img src="img/cert444.jpg" alt="Third slide">
                            </div>
                        </div><!-- /.carousel-inner -->
                      <a class="carousel-control-prev" href="#lightbox2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#lightbox2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a>
                    </div><!-- /.modal-body -->
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
    </div>
<!-- footer -->
        <div class="footer" >
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 logo3"> 
                        <a class="navbar-brand" href="#"><img src="img/logo2.png" width="300px" alt="logo"></a>
                    </div>
                    <div class="col-12 col-lg-4 menu scroll">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                            <a class="nav-link" href="#header">ГЛАВНАЯ</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#about">О НАС</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#products">ТОВАРЫ</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#gallery">ГАЛЕРЕЯ</a>
                          </li>  
                          <li class="nav-item">
                            <a class="nav-link" href="#contacts">КОНТАКТЫ</a>
                          </li>  
                        </ul>
                    </div>
                    <div class="col-12 col-lg-4 ">
                        <div class="contacts footercontact">
                            <i class="fas fa-mobile-alt"></i> +380984884442 <br> 
                            <i class="fas fa-mobile-alt"></i> +380994884442 <br>  
                            <i class="fas fa-envelope"></i> nikszakaz@gmail.com
                        </div>
                    </div>  
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 col-lg-12 prava">
                    <p>© 2019 Все права защищены.</p> 
                </div>
            </div>
        </div>    
           
        <!-- </div> --> <!-- container -->
    </body>
</html>
