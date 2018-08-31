@extends('master')

@section('cuerpo')
<!-- productos -->
<div class="dresses">
    <div class="container">
    <div class="w3ls_dresses_grids">
        <div class="col-md-4 col-sm-3 col-sx-12 w3ls_dresses_grid_left">
            <div class="w3ls_dresses_grid_left_grid">
                <h3>Categorias</h3>
                <div class="w3ls_dresses_grid_left_grid_sub">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title asd">
                                    <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Tipos
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body panel_text">
                                    <ul>
                                        @foreach($tipos as $tipo)
                                            <li><a href="{{url('productos_tipo', $tipo->id)}}">{{$tipo->Descripcion}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title asd">
                                    <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Marcas
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                               <div class="panel-body panel_text">
                                    <ul>
                                        @foreach($marcas as $marca)
                                            <li><a href="{{url('productos_marca', $marca->id)}}">{{$marca->Descripcion}}</a></li>
                                        @endforeach
                                    </ul>
                              </div>
                            </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-sm-9 col-sx-12 w3ls_dresses_grid_right">
            <div class="w3ls_dresses_grid_right_grid3">
                @forelse($productos as $producto)
                <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses" style="padding: 15px">
                    <div class="agile_ecommerce_tab_left dresses_grid">
                        <div class="hs-wrapper hs-wrapper2">
                            <img src="{{asset('pagina/img/producto'.$producto->id.'_1.png')}}" alt=" " class="img-responsive" style="width: 100%; height: 100%;margin: auto;background-color: #ECECEC;" />
                            <img src="{{asset('pagina/img/producto'.$producto->id.'_1.png')}}" alt=" " class="img-responsive" style="width: 100%; height: 100%;margin: auto;background-color: #ECECEC;" />
                            <img src="{{asset('pagina/img/producto'.$producto->id.'_1.png')}}" alt=" " class="img-responsive" style="width: 100%; height: 100%;margin: auto;background-color: #ECECEC;" />
                            <img src="{{asset('pagina/img/producto'.$producto->id.'_2.png')}}" alt=" " class="img-responsive" style="width: 100%; height: 100%;margin: auto;background-color: #ECECEC;" />
                            <img src="{{asset('pagina/img/producto'.$producto->id.'_2.png')}}" alt=" " class="img-responsive" style="width: 100%; height: 100%;margin: auto;background-color: #ECECEC;" />
                            <img src="{{asset('pagina/img/producto'.$producto->id.'_2.png')}}" alt=" " class="img-responsive" style="width: 100%; height: 100%;margin: auto;background-color: #ECECEC;" />
                            <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                <ul>
                                    <li>
                                        <a href="{{url('simple', $producto->id)}}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @foreach($tipos as $tipo)
                            @if($producto->CodTipo == $tipo->id)
                                <h5><a href="{{url('simple', $producto->id)}}"><b>Tipo: {{$tipo->Descripcion}}</b></a></h5>
                            @endif
                        @endforeach
                        <div class="simpleCart_shelfItem">
                            @foreach($marcas as $marca)
                                @if($producto->CodMarca == $marca->id)
                                    <p>Marca: <span>{{$marca->Descripcion}}</span></p>
                                @endif
                            @endforeach                            
                            <p>Modelo: <span>{{$producto->Modelo}}</span></p>
                            <p><i class="item_price">Bs. {{$producto->Precio}}</i></p>
                        </div>
                    </div>
                </div>
                @empty
                <p>Lo sentimos, No existen productos en esta categoria.</p>
                @endforelse
                <div class="clearfix"> </div>
                <div class="row">
                    {!! $productos->links()!!}
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
</div>
<!-- //productos -->
@endsection