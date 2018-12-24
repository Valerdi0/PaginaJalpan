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
            <li><a href="/auth/logout">Cerrar sesion</a></li>
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
  <a href="#" class="list-group-item list-group-item-action disabled">Eliminar Post
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
                      <li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
                      <li><a class="icon fa-instagram" href="#"><span class="label">Instagram</span></a></li>
                    </ul>
                  </section>

              </div>
            </div>

            <!-- Copyright -->
              <div id="copyright">
                <ul class="menu">
                  <li>H. Ayuntamiento de Jalpan, Puebla. En colaboración con el Instituto Politécnico Nacional.</li>
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