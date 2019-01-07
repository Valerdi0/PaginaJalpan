<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>

    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('cont/css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('cont/css/font-awesome.css')}}">

</head>
<body>

    <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="/">Inicio</a></li>
                <li>
                    <a href="#main">Quienes Somos</a>
                </li>
                <li><a href="/tramites">Trámites</a></li>
                <li class="current"><a href="/contacto">Contacto</a></li>
                <li><a href="/turismo">Turismo</a></li>
                <li><a href="/transparencia">Transparencia</a></li>
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

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2 style="color:white;">Información<br>de Contacto</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> ayuntajalpan@outlook.es</p>
                <p><span class="fa fa-mobile"></span> (585) 902-8665</p>
            </section>
        </section>

        <form action="{{ url('contacto') }}" class="form_contact" method="POST">
            {{ csrf_field() }}
            <h2>Envia un mensaje</h2>
            <div class="user_info">
                <label for="names">Nombres *</label>
                <input type="text" id="names" name="names" >

                <label for="phone">Telefono / Celular</label>
                <input type="text" id="phone" name="phone" >

                <label for="subject">Asunto*</label>
                <input id="subject" name="subject">

                <label for="email">Correo electronico </label>
                <input type="text" id="email" name="email" >

                <label for="mensaje">Mensaje *</label>
                <textarea id="mensaje" name="mensaje" ></textarea>

                <input type="button" value="Enviar Mensaje" id="btnSend" onclick="submit()">
            </div>
        </form>

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
    <script src="{{asset('cont/js/jquery-3.2.1.js')}}"></script>
    <script src="{{asset('cont/js/script.js')}}"></script>
    <script src="{{asset('js/jquery.dropotron.min.js')}}"></script>
    <script src="{{asset('js/breakpoints.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>
</html>
