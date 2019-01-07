<!DOCTYPE html>
<html lang="es">
​<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Municipal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
​
​    @yield('css')
​
  </head>
  <body>
    <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li><a href="/">Inicio</a></li>
                        <li>
                            <a href="/#main">Quienes Somos</a>
                        </li>
                        <li><a href="/tramites">Trámites</a></li>
                        <li><a href="/contacto">Contacto</a></li>
                        <li><a href="/turismo">Turismo</a></li>
                        <li class="current"><a href="/transparencia">Transparencia</a></li>
                        <li><a href="/organigrama">Organigrama</a></li>
                        @if(Auth::check())
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} </a>
                              <ul class="dropdown-menu">
                                <li><a href="/inicio">inicio</a></li>
                                <li><a href="/lista-post">Ver posts</a></li>
                                <li><a href="/password/email">Cambiar contraseña</a></li>
                                <li><a href="/auth/logout">Cerrar sesion</a></li>
                              </ul>
                            </li>
                        @endif
                    </ul>
                </nav>
    <!-- Contenido -->
    <section class="container">
​     @yield('content') 
    </section>

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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.dropotron.min.js')}}"></script>
    <script src="{{asset('js/breakpoints.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  
​    @yield('js')
​
​  </body>
</html>