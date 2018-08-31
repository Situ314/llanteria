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
<!--                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> -->
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav">
                        <li><a href="{{url('/')}}">Inicio</a></li>
                        <li><a href="{{url('catalogo')}}" >Catálogo </a></li>
                        <!-- Mega Menu -->          
<!--                        <li class="dropdown active" style="display: inline-flex;">
                            <a href="{{url('catalogo')}}" class="act">Catálogo </a><a href="#" class="act dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <ul class="multi-column-dropdown">
                                    <li><a href="#Tipo">Tipo </a></li>
                                </ul>
                                <ul class="multi-column-dropdown">
                                    <li><a href="#Marca">Marca </a></li>
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
<div class="banner10" id="home1">
<!--    <div class="container">
        <h3>Si el camino es difícil, <span>vas en la dirección correcta</span></h3>
    </div>-->
</div>
<!-- //banner -->

<!-- tipo -->
<div class="w3l_related_products" id="Tipo">
    <div class="container">
        <h3>Nuestros tipos</h3>
        <ul id="flexiselDemo2">	
            @foreach($tipos as $tipo)
            <li>
                <div class="w3l_related_products_grid">
                    <div class="agile_ecommerce_tab_left dresses_grid">
                        <div class="hs-wrapper hs-wrapper3">
                            <img src="{{asset('pagina/img/'.$tipo->Foto.'')}}" alt=" " class="img-responsive" style="height: 100%;"/>
                            <img src="{{asset('pagina/img/'.$tipo->Foto.'')}}" alt=" " class="img-responsive" style="height: 100%;"/>
                            <img src="{{asset('pagina/img/'.$tipo->Foto.'')}}" alt=" " class="img-responsive" style="height: 100%;"/>
                            <img src="{{asset('pagina/img/'.$tipo->Foto.'')}}" alt=" " class="img-responsive" style="height: 100%;"/>
                            <img src="{{asset('pagina/img/'.$tipo->Foto.'')}}" alt=" " class="img-responsive" style="height: 100%;"/>
                            <img src="{{asset('pagina/img/'.$tipo->Foto.'')}}" alt=" " class="img-responsive" style="height: 100%;"/>
                            <div class="w3_hs_bottom">
                                <div class="flex_ecommerce">
                                    <a href="{{url('productos_tipo', $tipo->id)}}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                </div>
                            </div>
                        </div></br>
                        <h5 style="font-size: 22px;"><a href="single.html">{{$tipo->Descripcion}}</a></h5>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        <script type="text/javascript">
                $(window).load(function() {
                        $("#flexiselDemo2").flexisel({
                                visibleItems:4,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,    		
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: { 
                                        portrait: { 
                                                changePoint:480,
                                                visibleItems: 1
                                        }, 
                                        landscape: { 
                                                changePoint:640,
                                                visibleItems:2
                                        },
                                        tablet: { 
                                                changePoint:768,
                                                visibleItems: 3
                                        }
                                }
                        });
                });
        </script>
        <script type="text/javascript" src="{{ asset('pagina/js/jquery.flexisel.js') }}"></script>
    </div>
</div>
<!-- //tipo -->

<!-- macras -->
<div class="top-brands" style="background-color: #fffde1;" id="Marca">
    <div class="container">
        <h3>Nuestras marcas</h3>
        <div class="sliderfig">
            <ul id="flexiselDemo1">
                @foreach($marcas as $marca)
                <li>
                    <a href="{{url('productos_marca', $marca->id)}}"><img src="{{asset('pagina/img/'.$marca->Foto.'')}}" alt=" " class="img-responsive" /></a>
                </li>
                @endforeach
            </ul>
        </div>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo1").flexisel({
                        visibleItems: 4,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,    		
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: { 
                                portrait: { 
                                        changePoint:480,
                                        visibleItems: 1
                                }, 
                                landscape: { 
                                        changePoint:640,
                                        visibleItems:2
                                },
                                tablet: { 
                                        changePoint:768,
                                        visibleItems: 3
                                }
                        }
                });
            });
        </script>
        <script type="text/javascript" src="{{ asset('pagina/js/jquery.flexisel.js') }}"></script>
    </div>
</div>
<!-- //marcas -->
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