<!DOCTYPE html>
<html>
<head>
<title>Llanteria CC&C</title>
<!-- aplicaiones mobiles-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Women's Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- aplicaiones mobiles -->
{!! Html::style('pagina/css/bootstrap.css') !!}
{!! Html::style('pagina/css/style.css') !!}
{!! Html::style('pagina/css/fasthover.css') !!}
<!--<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />-->
<!-- js -->
<script type="text/javascript" src="{{ asset('pagina/js/jquery.min.js') }}"></script>
{!! Html::style('pagina/css/jquery.countdown.css') !!}
<script type="text/javascript" src="{{ asset('pagina/js/simpleCart.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('pagina/js/bootstrap-3.1.1.min.js') }}"></script>
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){		
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
</head>
	
<body>
<!-- header -->
<!--<div class="header">
    <div class="container">
        <div class="w3l_logo">
            <center><h1><a href="{{url('/')}}"><b style="color:#ffcc33;">Llanteria C C & C</b><span>Para los amantes de las ruedas</span></a></h1></center>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>-->
<div class="navigation">
    <div class="container">
        <div class="col-md-2">
            <a href="{{url('/')}}"><img src="{{asset('pagina/img/logo.png')}}" alt=" " class="img-responsive" style="margin-top: -20px;margin-bottom: 20px;"/></a>
        </div>
        <div class="col-md-10" >
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
    <!--            <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
    </div> -->
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{url('/')}}" class="act">Inicio</a></li>
                        <li><a href="{{url('catalogo')}}" >Catálogo </a></li>
                        <!-- Mega Menu -->          
<!--                        <li class="dropdown" style="display: inline-flex;">
                            <a href="{{url('catalogo')}}" >Catálogo </a><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <ul class="multi-column-dropdown">
                                    <li><a href="dresses.html">Tipo </a></li>
                                </ul>
                                <ul class="multi-column-dropdown">
                                    <li><a href="dresses.html">Marca </a></li>
                                </ul>
                            </ul>
                        </li>-->
                        <li><a href="about.html">Productos</a></li>
                        <li><a href="{{url('servicios')}}">Servicio y Reparación</a></li>
                        <li><a href="{{url('contacto')}}">Contáctanos</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- //header -->
<!-- banner -->
<div class="banner" id="home1">
    <div class="container">
        <h3>Si el camino es difícil, <span>vas en la dirección correcta</span></h3>
    </div>
</div>
<!-- //banner -->
<!-- about -->
<div class="about">
    <div class="container">	
        <div class="w3ls_about_grids">
            <div class="col-md-6 w3ls_about_grid_left">
                <h1>¿Quiénes somos?</h1></br>
                <p>Somos una empresa dedicada en la comercialización de llantas especializadas para los rubros de
la construcción, industrial, agrícola, minería y transporte de carga pesada. Ofrecemos una
amplia variedad de productos que pueden ajustarse a las necesidades de los usuarios. Contamos
con importantes convenios comerciales con marcas líderes en el mercado internacional. Al ser
importadores directos, tenemos tarifas competitivas que nos permiten ofrecer precios
mayoristas dentro del mercado minorista. Atendemos clientes en toda el Estado Boliviano.</p>
                <div class="col-xs-2 w3ls_about_grid_left1">
                    <span class="glyphicon 	glyphicon glyphicon-heart" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 w3ls_about_grid_left2">
                    <p><b>Servicio rápido y de calidad</b></p>
                    <p>El cliente es el centro de nuestro compromiso y acción, buscamos siempre atender a nuestros clientes de manera rápida sin dejar de lado la calidad de servicio.</p>
                </div>
                <div class="clearfix"> </div>
                <div class="col-xs-2 w3ls_about_grid_left1">
                    <span class="glyphicon glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 w3ls_about_grid_left2">
                    <p><b>Asesoramiento profesional</b></p>
                    <p>Contamos con personal capacitado y de experiencia para poder asesorar a nuestros clientes de acuerdo con sus necesidades.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 w3ls_about_grid_right">
                <img src="{{asset('pagina/img/sobre_nosotros.jpg')}}" alt=" " class="img-responsive" style="margin: auto; padding-top: 70px;"/>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //about -->
<!--mision,vision-->
<div class="team">
    <div class="container">
        <center><h2><span style="color: #ffcc33;">—</span>Misión, visión y valores de nuestra empresa</h2></center>
        <div class="wthree_team_grids">
            <div class="col-md-4 wthree_team_grid" id="move">
                <img src="{{asset('pagina/img/mision.png')}}" alt=" " class="img-responsive" />
                <h4><b>MISIÓN </b><span>Sostener los vehículos de nuestros clientes a través de productos y servicios de calidad, en
instalaciones adecuadas y con tecnología de vanguardia, brindando un servicio profesional y
humano, y así ofrecer a nuestros clientes una experiencia agradable de manejo en sus labores
diarias.</span></h4>
            </div>
            <div class="col-md-4 wthree_team_grid" id="move">
                <img src="{{asset('pagina/img/vision.png')}}" alt=" " class="img-responsive" />
                <h4><b>VISIÓN </b><span>Somos la empresa líder en ventas y tecnología del giro llantero en el Altiplano Boliviano, a través
de modelos de servicio modernos y con una imagen corporativa que es distinguida claramente
de nuestra competencia. Somos reconocidos por brindar un excelente servicio con productos
de la más alta calidad.</span></h4>
            </div>
            <div class="col-md-4 wthree_team_grid" id="move">
                <img src="{{asset('pagina/img/objetivo.png')}}" alt=" " class="img-responsive" />
                <h4><b>VALORES </b><span>
                        <li>Integridad</li><li>Honestidad</li><li>Respeto</li><li>Servicio</li><li>Innovación</li><li>Trabajo en equipo</li></span></h4>
            </div>
            <div class="clearfix"></div></br>
            <center><h4>"Trabajamos para entregar un mejor servicio a nuestros clientes"</h4></center>
        </div>
    </div>
</div>
<!--//mision,vision-->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-md-4 w3_footer_grid">
                <h3>Contacto</h3>
                <p>Para más información puedes dirigirte a:</p>
                <ul class="address">
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>#522 Avenida Bush, Miraflores, <span>La Paz, Bolivia.</span></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+591 73732037</li>
                </ul>
            </div>
            <div class="col-md-4 w3_footer_grid">
                <h3>Menu</h3>
                <ul class="info"> 
                    <li><a href="{{url('/')}}">Sobre nosotros</a></li>
                    <li><a href="{{url('catalogo')}}">Catálogo</a></li>
                    <li><a href="shirts.html">Productos</a></li>
                    <li><a href="{{url('servicios')}}">Servicio y reparación</a></li>
                    <li><a href="{{url('contacto')}}">Contáctanos</a></li>
                </ul>
            </div>
            <div class="col-md-4 w3_footer_grid">
                <h4>Siguenos en</h4>
                <div class="agileits_social_button">
                    <ul>
                        <li><a href="#" class="facebook"> </a></li>
                        <li><a href="#" class="twitter"> </a></li>
                        <li><a href="#" class="google"> </a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="footer-copy1">
            <div class="footer-copy-pos">
                <a href="#home1" class="scroll"><img src="{{asset('pagina/images/arrow.png')}}" alt=" " class="img-responsive" /></a>
            </div>
        </div>
        <div style="height: 10px;">
            <p>&copy; 2018 <span style="color:#ffcc33;">CC&C Llanteria.</span> Todos los derechos reservados | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
    </div>
</div>
<!-- //footer -->
</body>
</html>