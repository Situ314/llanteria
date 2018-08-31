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
                        <!-- Mega Menu -->          
                        <li><a href="{{url('catalogo')}}" >Catálogo </a></li>
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
<div class="banner10" id="home1">
<!--    <div class="container">
        <h3>Si el camino es difícil, <span>vas en la dirección correcta</span></h3>
    </div>-->
</div>
<!-- //banner -->

<!-- master -->
@yield('cuerpo')
<!-- //master -->

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