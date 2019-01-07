<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/menu.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}" />
</head>
<body>
  <!-- Nav -->
        <nav id="nav">
          <ul>
            <li class="current"><a href="/">Inicio</a></li>
            <li>
              <a href="/#main">Quienes Somos</a>
            </li>
            <li><a href="/tramites">Trámites</a></li>
            <li><a href="/contacto">Contacto</a></li>
            <li><a href="/turismo">Turismo</a></li>
            <li><a href="/transparencia">Transparencia</a></li>
            <li><a href="/organigrama">Organigrama</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} </a>
              <ul class="dropdown-menu">
                <li><a href="/inicio">inicio</a></li>
                <li><a href="/lista-post">Ver post</a></li>
                <li><a href="/auth/logout">Cerrar sesion</a></li>
              </ul>
            </li>
          </ul>
        </nav>

	
	<div class="jumbotron">
  <h1 class="display-3">Bienvenido {{auth()->user()->name}}!</h1>


</div>

<div class="col-4 col-6-medium col-12-small">
<div class="list-group">
  <a href="/lista-post" class="list-group-item list-group-item-action active">
    Ver Posts
  </a>
  <a href="/post/editpost" class="list-group-item list-group-item-action active">
    Crear Post
  </a>
</div>
</div>
<!-- Footer -->
        <footer id="footer">
          <div class="container">
            <div class="row gtr-200">
              <div class="col-12">

                <!-- Contact -->
                  <section>
                    <h2 class="major"><span>Redes Sociales</span></h2>
                    <ul class="contact">
                      <li><a class="icon fa-facebook" href="https://www.facebook.com/Ayuntamiento-Jalpan-2018-2021-340526706700657"><span class="label">Facebook</span></a></li>
                      <li><a class="icon fa-instagram" href="https://www.instagram.com/ayuntamiento_jalpan.puebla"><span class="label">Instagram</span></a></li>
                    </ul>
                  </section>

              </div>
            </div>

            <!-- Copyright -->
              <div id="copyright">
                <ul class="menu">
                  <li>H. Ayuntamiento de Jalpan, Puebla.<br> En colaboración con el Instituto Politécnico Nacional.<br>
                  <img src="{{asset('turi/images/escudo.png')}}" title="H. Ayuntamiento de Jalpan, Puebla" style="height: 50px; padding-right: 2.5%;">
                  <img src="{{asset('turi/images/logoipn.png')}}" title="Instituto Politécnico Nacional" style="height: 50px; padding-left: 2.5%;"> </li>
                </ul>
              </div>

          </div>
        </footer>

    </div>

    <!-- Scripts -->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/jquery.dropotron.min.js')}}"></script>
      <script src="{{asset('js/jquery.scrolly.min.js')}}"></script>
      <script src="{{asset('js/browser.min.js')}}"></script>
      <script src="{{asset('js/breakpoints.min.js')}}"></script>
      <script src="{{asset('js/util.js')}}"></script>
      <script src="{{asset('js/main.js')}}"></script>
</body>
</html>