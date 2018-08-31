@extends('master')

@section('cuerpo')
<!-- producto simple -->
<div class="single">
    <div class="container">
        <div class="col-md-4 single-left">
            <div class="flexslider">
                <ul class="slides">
                    <li data-thumb="{{asset('pagina/img/producto'.$producto->id.'_1.png')}}" style="background-color: #ECECEC;">
                        <div class="thumb-image"><img src="{{asset('pagina/img/producto'.$producto->id.'_1.png')}}" data-imagezoom="true" class="img-responsive" style="margin: auto;align-content: center;vertical-align: middle;background-color: #ECECEC;"></div>
                    </li>
                    <li data-thumb="{{asset('pagina/img/producto'.$producto->id.'_2.png')}}" style="background-color: #ECECEC;">
                        <div class="thumb-image"><img src="{{asset('pagina/img/producto'.$producto->id.'_2.png')}}" data-imagezoom="true" class="img-responsive" style="margin: auto;align-content: center;vertical-align: middle;background-color: #ECECEC;"></div>
                    </li>
                </ul>
            </div>
            <!-- flixslider -->
            <script type="text/javascript" src="{{ asset('pagina/js/jquery.flexslider.js') }}"></script>
            {!! Html::style('pagina/css/flexslider.css') !!}
            <script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
              $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
              });
            });
            </script>
            <!-- flixslider -->
            <!-- zooming-effect -->
            <script type="text/javascript" src="{{ asset('pagina/js/imagezoom.js') }}"></script>
            <!-- //zooming-effect -->
        </div>
        <div class="col-md-8 single-right">
            <h3>Características</h3>
            <div class="description">                
                <h5><i><b>Tipo: </b></i></h5>
                <span>{{$producto->CodTipo}}</span>
            </div></br> 
            <div class="description">
                <h5><i><b>Marca: </b></i></h5>
                <span>{{$producto->CodMarca}}</span>
            </div></br>  
            <div class="description">
                <h5><i><b>Modelo: </b></i></h5>
                <span>{{$producto->Modelo}}</span>
            </div></br> 
            <div class="description">
                <h5><i><b>Medida: </b></i></h5>
                <span>{{$producto->Medida}}</span>
            </div></br> 
            <div class="description">
                <h5><i><b>Piso: </b></i></h5>
                <span>{{$producto->Piso}}</span>
            </div></br> 
            <div class="description">
                <h5><i><b>Capas: </b></i></h5>
                <span>{{$producto->Capas}}</span>
            </div></br> 
            <div class="description">
                <h5><i><b>Precio: </b></i></h5>
                <span>Bs. {{$producto->Precio}}</span>
            </div>
        </div>
        <div class="clearfix"> </div>
        <div id="horizontalTab1" style="display: block; width: 100%; margin: auto; align-items: center;">
            <ul>
                <a href="{{url()->previous()}}" class="resp-tab-item resp-tab-active"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Volver atras</a>
                <a href="{{url('catalogo')}}" class="resp-tab-item resp-tab-active">Volver a "Catálogo"</a>
            </ul>
        </div>
    </div>
</div>
<!-- //producto simple -->
@endsection