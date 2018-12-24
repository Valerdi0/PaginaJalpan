
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Anton|B612+Mono|Fira+Sans|Fjalla+One|Major+Mono+Display|Oswald|PT+Sans+Narrow|Quicksand|Sedgwick+Ave|Staatliches|ZCOOL+XiaoWei" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">

    <title>TURISMO EN JALPAN, PUEBLA</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('turi/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Main stylesheet -->
    <link href="{{asset('turi/css/hallooou.css')}}" rel="stylesheet">

    <!-- Parallax stylesheet -->
    <link href="{{asset('turi/css/parallax.css')}}" rel="stylesheet">


    <!-- Plugin stylesheets -->
    <link href="{{asset('turi/css/plugins/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('turi/css/plugins/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('turi/css/plugins/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('turi/css/plugins/animate.css')}}" rel="stylesheet">
    <link href="{{asset('turi/css/plugins/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('turi/css/plugins/jquery.mb.YTPlayer.min.css')}}" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="{{asset('turi/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <script>
        document.createElement('video');
      </script>
    <![endif]-->

</head>

<body id="home" class="parallax-page">
            <!-- Navigation -->
            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header pull-left">
                        <a class="navbar-brand page-scroll" href="/">
                            <!-- replace with your brand logo/text -->
                            <span class="brand-logo"><img src="{{asset('turi/images/logo.png')}}" onerror="this.src='images/logo05.png'; this.onerror=null;" alt="jalpan, Puebla" title="JALPANPUEBLA.COM" class="img-responsive"></span>
                        </a>
                    </div>
                    <div class="main-nav pull-right">
                        <div class="button_container toggle">
                            <span class="top"></span>
                            <span class="middle"></span>
                            <span class="bottom"></span>
                        </div>
                    </div>
                    <div class="overlay" id="overlay">
                        <nav class="overlay-menu">
                            <ul>
                                <li><a href="/">Página Municipal</a></li>
                                <li><a href="#home">Inicio</a></li>
                                <li><a href="#portfolio">Galería</a></li>
                                <li><a href="#counter">Contacto</a></li>
                            </ul>
                        </nav>
                    </div>
                </div><!-- /.container -->
            </nav>



            <!-- Intro Header -->
            <!-- Full Page Image Background Carousel Header -->
            <header id="intro-carousel" class="carousel slide">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                    <div id="parallax-slide" class="fill"></div>
                        <div class="carousel-caption">
                            <h1 class="animated slideInDown" style="font-size: 5em; text-shadow:-3px 3px 5px #232627;" >MUNICIPIO DE <span class="highlight" style="text-shadow: 1px 0 0 #fff, -1px 0 0 #fff, 0 1px 0 #fff, 0 -1px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;">JALPAN, PUEBLA.</span></h1>
                            <p class="intro-text animated slideInUp" style="font-family: 'Sedgwick Ave', cursive; line-height: 3;">Tierra de cafetales y riqueza cultural.</p>
                        </div>
                        <div class="overlay-detail"></div>
                    </div><!-- /.item -->
                </div>
                <div class="mouse"></div>
            </header>


            <!-- Services Section -->
            <section id="services" class="services content-section">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h2 style="margin: -5px; color: rgba(35,38,39, 1);">ATRACTIVOS</h2>
                           <div style="position: center;"><hr style="height: 1px; width: 80%; background: #686868;"></hr></div>
                        
                        </div><!-- /.col-md-12 -->

                        <div class="container">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="row services-item sans-shadow text-center" id="trad" style="padding: 60px;">
                                       <!-- <i class="fa fa-cogs fa-3x"></i> -->
                                        <h4><a style="text-shadow:-2px 2px 5px #232627;" href="/turismo/tradiciones">TRADICIONES</a></h4>
                                    </div><!-- /.row -->
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="row services-item sans-shadow text-center" id="natu" style="padding: 60px;">
                                        <!-- <i class="fa fa-paint-brush fa-3x"></i> -->
                                        <h4><a style="text-shadow:-2px 2px 5px #232627;" href="/turismo/riqueza-natural">RIQUEZA NATURAL</a></h4>
                                    </div><!-- /.row -->
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="row services-item sans-shadow text-center" id="caf" style="padding: 60px;">
                                        <!-- <i class="fa fa-bullhorn fa-3x"></i> -->
                                        <h4><a style="text-shadow:-2px 2px 5px #232627;" href="/turismo/cafetales">CAFETALES</h4>
                                    </div><!-- /.row -->
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="row services-item sans-shadow text-center" id="gast" style="padding: 60px;">
                                        <!-- <i class="fa fa-database fa-3x"></i> -->
                                        <h4><a style="text-shadow:-2px 2px 5px #232627;" href="/turismo/gastronomia">GASTRONOMÍA</a></h4>
                                    </div><!-- /.row -->
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="row services-item sans-shadow text-center" id="leye" style="padding: 60px;">
                                        <!-- <i class="fa fa-align-left fa-3x"></i> -->
                                        <h4><a style="text-shadow:-2px 2px 5px #232627;" href="/turismo/leyendas">MITOS</a></h4>
                                    </div><!-- /.row -->
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="row services-item sans-shadow text-center" id="ubic" style="padding: 60px;">
                                        <!-- <i class="fa fa-camera fa-3x"></i> -->
                                        <h4><a style="text-shadow:-2px 2px 5px #232627;" href="#clients">UBICACIÓN</a></h4>
                                    </div><!-- /.row -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.section -->

            <!-- Products Section -->
            <section id="products" class="products content-section parallax">
                <center><div class="col-md-12">
                            <h2 style="margin: -5px; position: center; color: rgba(35,38,39, 1);">Facebook &amp; Instagram</h2>
                            <div style="position: center;"><hr style="height: 1px; width: 80%; background: #686868;"></hr></div>
                 </div></center><!-- /.col-md-12 -->
                 <center><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAyuntamiento-Jalpan-2018-2021-340526706700657%2F%3Fmodal%3Dadmin_todo_tour&tabs=timeline%2C%20events&width=365&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="365" height="500" style="margin: 0 10% 0 0; border:none;overflow:hidden;position:auto; border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

                    <!-- InstaWidget -->
                <a style="margin: 0 0 0 10%;" href="https://instawidget.net/v/user/ayuntamiento_jalpan.puebla" id="link-1973866973e9343a379e9fbbd1413c00ab7f36835cd2fd08b2f9735dde403d30">@ayuntamiento_jalpan.puebla</a>
                <script src="https://instawidget.net/js/instawidget.js?u=1973866973e9343a379e9fbbd1413c00ab7f36835cd2fd08b2f9735dde403d30&width=365px"></script></center>
            </section><!-- /.products -->


            <!-- Portfolio/Gallery Section -->
            <section id="portfolio" class="portfolio content-section parallax" >
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h2>GALERIA</h2>
                            <div style="position: center;">
                                <hr style="height: 1px; width: 80%; background: #686868;"></hr>
                            </div>
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->

                <div class="container project-container text-center">
                    <div class="recent-project-carousel owl-carousel owl-theme popup-gallery">
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/principal01.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-one.jpg')}}">                          
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-two.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-three.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-four.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-five.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-six.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-seven.jpg')}}">              
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-eight.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-nine.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-ten.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-eleven.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-twelve.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-thirteen.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-fourteen.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-fiveteen.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-sixteen.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-seventeen.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-eighteen.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-nineteen.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-twenty.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-twentyone.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-twentytwo.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-twentythree.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-twentyfour.jpg')}}">
                        </div><!-- /.item -->
                        <div class="item recent-project">
                            <img src="{{asset('turi/images/gallery/project-twentyfive.jpg')}}">
                        </div><!-- /.item -->
                    </div>
                    <!-- /.recent-project-carousel -->

                    <div class="customNavigation project-navigation text-center">
                        <a class="btn-prev"><i class="fa fa-angle-left fa-2x"></i></a>
                        <a class="btn-next"><i class="fa fa-angle-right fa-2x"></i></a>
                    </div><!-- /.project-navigation -->
                </div><!-- /.container -->
            </section><!-- /.portfolio -->

<!-- Our clients -->
            <section id="clients" class="our-clients content-section text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>ESTO Y MUCHO MÁS PODRÁS ENCONTRAR EN JALPAN</h2>
                            <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d934.8668790743785!2d-97.84527281501188!3d20.40483349850937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDI0JzE3LjciTiA5N8KwNTAnNDAuOCJX!5e0!3m2!1ses-419!2smx!4v1545367766954" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                            <div"><h9 style="color: #fff; width: 0px; font-size: 1.2em; font-family: 'arial', 'Helvetica Neue', Helvetica, Arial, sans-serif;">Se localiza en la parte norte del estado de Puebla, sus coordenadas geográficas los paralelos 20° 23’ 24” de latitud Norte y los meridianos 97° 45’ 00” y 98° 0’ 54” de longitud occidental. Sus colindancias son al Norte con Pantepec, Veracruz; al sur Tlacuilotepec y Xilotepec, Puebla; al Oeste con Venustiano Carranza, Puebla y al Poniente con el estado de Hidalgo.<br></br>Principales vialidades de acceso, Tuxpan-México 132D y Vialidad Providencia 130.</h9></div>
                        </div><!-- /.col-md-12-->
                    </div><!-- /.row -->
                 </div><!-- /.container -->
            </section><!-- /.our-clients -->

            <!-- Counter Section -->
            <section id="counter" class="counter-section content-section parallax">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h2 class="white" style=" font-size: 600%; text-shadow: -3px 3px 15px #232627; ">¡VEN Y CONOCENOS!</h2>
                        </div><!-- /.col-md-12 -->
                        <br></br>
                        <div class="row text-center">
                        <div class="col-md-12 social segment">
                            <br></br>
                            <h4>REDES SOCIALES</h4>
                            <a href="https://www.facebook.com/Ayuntamiento-Jalpan-2018-2021-340526706700657" target="_blank"><i class="fa fa-facebook fa-3x" style="padding: 50px; text-shadow: -2px 2px 5px #434343;"></i></a>
                            <a href="https://www.instagram.com/ayuntamiento_jalpan.puebla" target="_blank"><i class="fa fa-instagram fa-3x" style="padding: 50px; text-shadow: -2px 2px 5px #434343;"></i></a>
                            <a href="mailto:ayuntajalpan@outlook.es" target="_blank"><i class="fa fa-envelope-o fa-3x" style="padding: 50px; text-shadow: -2px 2px 5px #434343;"></i></a> 
                            <a href="tel:+520000000000" target="_blank"><i class="fa fa-phone fa-3x" style="padding: 50px; text-shadow: -2px 2px 5px #434343;"></i></a>                        
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.counter-section -->

            <!-- Footer -->
            <footer>
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12 segment">
                            <a href="https://www.jalpanpuebla.com/">
                                <center><img src="{{asset('turi/images/logo001.png')}}" onerror="this.src='{{asset('turi/images/logo001.png')}}'; this.onerror=null;" alt="Turismo" title="Municipio de Jalpan, Puebla." class="img-responsive" style="height: 20px;"></a>
                            </a>
                            <p class="white" style="font-family: 'Raleway', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight: 550; ">Jalpan decidido al cambio verdadero.</p>
                            <div style="padding: 10px;"></div>   
                            <img src="{{asset('turi/images/escudo.png')}}" title="H. Ayuntamiento de Jalpan, Puebla" style="height: 90px; padding-right: 2.5%;"> 
                            <img src="{{asset('turi/images/logoipn.png')}}" title="Instituto Politécnico Nacional" style="height: 90px; padding-left: 2.5%;"> 
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
                <div class="copynote">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                &copy; 2018 - 2021. H. Ayuntamiento de Jalpan, Puebla. En colaboración con el Instituto Politécnico Nacional.
                            </div><!-- /.col-md-12 -->

                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.copynote -->

                <div class="nav pull-right scroll-top">
                    <a href="#home" title="Scroll to top"><i class="fa fa-angle-up"></i></a>
                </div>

            </footer><!-- /.footer -->



    <!-- jQuery -->
    <script src="{{asset('turi/js/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('turi/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('turi/js/plugins/wow.min.js')}}"></script>
    <script src="{{asset('turi/js/plugins/owl.carousel.min.js')}}"></script>
    <script src="{{asset('turi/js/plugins/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{asset('turi/js/plugins/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('turi/js/plugins/jquery.mb.YTPlayer.min.js')}}"></script>
    <script src="{{asset('turi/js/plugins/jquery.countTo.js')}}"></script>
    <script src="{{asset('turi/js/plugins/jquery.inview.min.js')}}"></script>
    <script src="{{asset('turi/js/plugins/pace.min.js')}}"></script>
    <script src="{{asset('turi/js/plugins/jquery.easing.min.js')}}"></script>
    <script src="{{asset('turi/js/plugins/jquery.validate.min.js')}}"></script>
    <script src="{{asset('turi/js/plugins/additional-methods.min.js')}}"></script> 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoVKfEihX__NdMwdDysA6Vve6PE9Ierj4"></script>

    <!-- Custom JavaScript -->
    <script src="{{asset('turi/js/jquery.min.js')}}"></script>
</body>

</html>
