@extends('master')

@section('cuerpo')
<div class="col-md-12 wthree_banner_bottom_right">
    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#balanceo" id="balanceo-tab" role="tab" data-toggle="tab" aria-controls="balanceo">Balanceo</a></li>
                <li role="presentation"><a href="#alineacion" role="tab" id="alineacion-tab" data-toggle="tab" aria-controls="alineacion">Alineación</a></li>
                <li role="presentation"><a href="#rotacion" role="tab" id="rotacion-tab" data-toggle="tab" aria-controls="rotacion">Rotación</a></li>
                <li role="presentation"><a href="#amortiguadores" role="tab" id="amortiguadores-tab" data-toggle="tab" aria-controls="amortiguadores">Amortiguadores</a></li>
                <li role="presentation"><a href="#suspension" role="tab" id="suspension-tab" data-toggle="tab" aria-controls="suspension">Suspensión</a></li>
                <li role="presentation"><a href="#taller" role="tab" id="taller-tab" data-toggle="tab" aria-controls="taller">Taller móvil</a></li>
                <li role="presentation"><a href="#frenos" role="tab" id="frenos-tab" data-toggle="tab" aria-controls="frenos">Frenos</a></li>
                <li role="presentation"><a href="#inflado" role="tab" id="inflado-tab" data-toggle="tab" aria-controls="inflado">Inflado de nitrógeno</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="balanceo" aria-labelledby="balanceo-tab">
                <div class="agile_ecommerce_tabs">
                    <div class="col-md-5 agile_ecommerce_tab_left" >
                        <p>Si al conducir sientes que tu automóvil vibra al adquirir velocidad, es necesario que realices
el servicio de balanceo.
El balancear la rueda corresponde a equilibrar el peso de la misma por posibles
irregularidades del rin o neumático.</p></br>
<p>El no hacer un balance expone a:
<li> Desgaste anormal rápido en las llantas </li>
<li> Una incomodidad en el manejo </li>
<li> Un uso constante de refacciones de suspensión y de dirección. </li></p></br>
<p>A veces las vibraciones no se perciben al conducir, pero eso no significa que no haya. Pueden
existir y estas filtradas por el vehículo por lo mismo es muy importante balancear tanto las
llantas delanteras como las traseras.</p>
                    </div> 
                    <div class="col-md-7 agile_ecommerce_tab_left">
                        <img src="{{asset('pagina/img/balanceo.jpg')}}" alt=" " class="img-responsive" style="margin: auto; width: 430px;height: 330px;"/>
                    </div> 
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="alineacion" aria-labelledby="alineacion-tab">
                <div class="agile_ecommerce_tabs">
                    <div class="col-md-5 agile_ecommerce_tab_left">
                        <p>La alineación consiste en asegurarse que las llantas trabajen en forma paralela unas de las
otras, y que las llantas tengan contacto con el pavimento en el ángulo correcto; asimismo
asegura el ajuste perfecto entre los componentes de la suspensión, dirección y ruedas del
vehículo.</p></br>
<p>Los beneficios de alinear las llantas de tu vehículo son:
                        <li> Desplazamiento suave del vehículo en curva y en línea recta.</li>
                        <li> Evita el desgaste prematuro de llantas.</li>
                        <li> Mejora la estabilidad del vehículo en cualquier tipo de camino.</li>
                        <li> Mayor rendimiento de combustible.</li>
                        <li> Mayor comodidad y seguridad en el manejo.</li></p>
                    </div> 
                    <div class="col-md-7 agile_ecommerce_tab_left">
                        <img src="{{asset('pagina/img/alineacion.jpg')}}" alt=" " class="img-responsive" style="margin: auto; width: 430px;height: 330px;"/>
                    </div> 
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="rotacion" aria-labelledby="rotacion-tab">
                <div class="agile_ecommerce_tabs">
                    <div class="col-md-5 agile_ecommerce_tab_left">
                        <span>La rotación es la práctica de retirar cada llanta de tu vehículo y luego colocarlas en posiciones
distintas para lograr emparejar el desgaste de las mismas y se alargue la vida útil de las llantas.
Es recomendable realizar la rotación cada 10,000 km recorridos o cada 6 meses, lo que ocurra
primero.</span>
                    </div> 
                    <div class="col-md-7 agile_ecommerce_tab_left">
                        <img src="{{asset('pagina/img/rotacion.jpg')}}" alt=" " class="img-responsive" style="margin: auto; width: 430px;height: 330px;"/>
                    </div> 
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="amortiguadores" aria-labelledby="amortiguadores-tab">
                <div class="agile_ecommerce_tabs">
                    <div class="col-md-5 agile_ecommerce_tab_left">
                        <span>Los amortiguadores hacen real la comodidad de manejo, ya que controlan el contacto del
vehículo con el suelo brindando también estabilidad.
El mal funcionamiento de los amortiguadores pone en peligro la dirección del auto y lo puedes
observar en la inestabilidad, rebote contra el piso anormal, degaste anormal de llantas,
descontrol del auto al momento de frenar repentinamente, etc.</span>
                    </div> 
                    <div class="col-md-7 agile_ecommerce_tab_left">
                        <img src="{{asset('pagina/img/amortiguadores.jpg')}}" alt=" " class="img-responsive" style="margin: auto; width: 430px;height: 330px;"/>
                    </div> 
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="suspension" aria-labelledby="suspension-tab">
                <div class="agile_ecommerce_tabs">
                    <div class="col-md-5 agile_ecommerce_tab_left">
                        <span>La suspensión une la carrocería del vehículo a los neumáticos, soporta la carrocería y
amortigua las variaciones de vibración y sacudidas de la superficie de la pista durante el
manejo.
Además de prologar la vida de tus llantas, ayuda a absorber el balanceo de la carrocería por
medio de los amortiguadores y asegura el confort de viaje.</span>
                    </div> 
                    <div class="col-md-7 agile_ecommerce_tab_left">
                        <img src="{{asset('pagina/img/suspension.jpg')}}" alt=" " class="img-responsive" style="margin: auto; width: 430px;height: 330px;"/>
                    </div> 
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="taller" aria-labelledby="taller-tab">
                <div class="agile_ecommerce_tabs">
                    <div class="col-md-5 agile_ecommerce_tab_left">
                        <span>Para atención de servicio pesado contamos con un taller móvil equipado con herramienta de
alta tecnología para proporcionar los servicios directamente en la base de nuestros clientes
transportistas.</span>
                    </div> 
                    <div class="col-md-7 agile_ecommerce_tab_left">
                        <img src="{{asset('pagina/img/taller.jpg')}}" alt=" " class="img-responsive" style="margin: auto; width: 430px;height: 330px;"/>
                    </div> 
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="frenos" aria-labelledby="frenos-tab">
                <div class="agile_ecommerce_tabs">
                    <div class="col-md-5 agile_ecommerce_tab_left">
                        <span>Los frenos son un elemento indispensable para asegurar la confiabilidad del manejo de su
vehículo.
En Llantas y Rines del Guadiana nos aseguramos de que tu auto tenga los mejores frenos
disponibles en el mercado, además nos especializamos en instalar y ajustar debidamente.</span>
                    </div> 
                    <div class="col-md-7 agile_ecommerce_tab_left">
                        <img src="{{asset('pagina/img/frenos.jpg')}}" alt=" " class="img-responsive" style="margin: auto; width: 430px;height: 330px;"/>
                    </div> 
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="inflado" aria-labelledby="inflado-tab">
                <div class="agile_ecommerce_tabs">
                    <div class="col-md-5 agile_ecommerce_tab_left">
                        <span>El nitrógeno es un gas inerte que favorece el manejo del vehículo, contribuye con el ahorro
de combustible y prolonga la vida útil de la llanta.</span>
                    </div> 
                    <div class="col-md-7 agile_ecommerce_tab_left">
                        <img src="{{asset('pagina/img/inflado.jpg')}}" alt=" " class="img-responsive" style="margin: auto; width: 430px;height: 330px;"/>
                    </div> 
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection