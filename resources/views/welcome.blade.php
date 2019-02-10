<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
     
    </head>
    <body>
    
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <div class="container">
            <a class="navbar-brand" href="#"><img src="img/logo2.png" width="150px" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>    
                </ul>
            </div>
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

        <!-- <div class="row no-gutters">
            <div class="row">
                <div class="col">
                    <div class="parallax"></div>
                    <div id="rectangle" style="position: absolute; top: 10%; left:45%"></div>
                    <div class="row">
                        <div class="col-6"> lorem*98 Инженерный центр Экипаж  является  представителем одного из сам Инженерный центр Экипаж  является  представителем одного из самИнженерный центр Экипаж  является  представителем одного из сам</div>
                        <div class="col-6"><img src="img\D.jpg" width="100%" alt=""></div>
                    </div>
                   
                </div>
            </div>
            <div class="row">
                <div class="col">
                  <div class="row">
                        <div class="col-6">Инженерный центр Экипаж  является  представителем одного из сам Инженерный центр Экипаж  является  представителем одного из самИнженерный центр Экипаж  является  представителем одного из сам</div>
                        <div class="col-6"><img src="img\D.jpg" width="100%" alt=""></div>
                    </div>
                    <div class="row">
                        <div class="col-6">Инженерный центр Экипаж  является  представителем одного из сам Инженерный центр Экипаж  является  представителем одного из самИнженерный центр Экипаж  является  представителем одного из сам</div>
                        <div class="col-6"><img src="img\D.jpg" width="100%" alt=""></div>
                    </div>  
                </div>
            </div>
        </div> -->
        <!-- style="position: absolute; top: 10%; left:45%" -->
    <div class="container">
        <div class="bgimg-1">
            <div class="row">
              <div class="col-3 caption-1">
                <div  class="rectangle" ></div>

                <span class="border-1">NIKS</span><br>
                <span class="border-2">вікна та двері</span>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 aboutas">
                <div  id="rectangle-left" ></div>
                <h3>О НАС</h3>
                <h5>Компания NIKS<sup>m</sup> является представителем одного из самых крупных производителей металлопластиковых окон в Украине.</h5>
                <p>Мы используем материалы известных мировых производителей и высокотехнологичное производство. Отшлифованный до идеала профессионализм наших сотрудников позволяет изготавливать окна любой сложности и конфигурации.</p>
                <button class="contact"> <a href="">связаться с нами</a></button>
            </div>
            <div class="col-12 col-lg-6 about">
            </div>
        </div>
        <div class="bgimg-2">
          <div class="row">
            <div class="col-3 caption-1" style="top:10%">
                <div  class="rectangle"  ></div>
            </div>
          </div>
          <div class="row">  
              <div class="col-6 col-lg-6 caption">
             
              <span class="border-2">У Вас есть вопросы? Оставьте заявку и мы перезвоним!</span><br>
              <button class="contact"><a href="">связаться с нами</a></button><br>
              <span class="border-3">Наши контакты: тел.+380984884442, +380994884442  email:nikszakaz@gmail.com</span>
              </div>
          </div>
        </div>

        <div class="job" style="position:relative;">
            <div class="row">
                <div class="col-3 caption-1" style="top:10%">
                <div  class="rectangle"></div>
                <h3>КАК МЫ РАБОТАЕМ</h3>
            </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12 col-lg-3"><div class="circle selection"></div></div>
                <div class="col-12 col-lg-3"><div class="circle"></div></div>
                <div class="col-12 col-lg-3"><div class="circle"></div></div>
                <div class="col-12 col-lg-3"><div class="circle"></div></div>
            </div>
        </div>

        <div class="bgimg-3">
          <div class="caption">
          <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">SCROLL UP</span>
          </div>
        </div>

        <div style="position:relative;">
          <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
          <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
          </div>
        </div>

        <div class="bgimg-1">
          <div class="caption">
          <span class="border">COOL!</span>
          </div>
        </div>
    </div>

</body>

   
    </body>
</html>
