@extends('baseLayout')
@section('content')
      <section>
        <section class="main-faqs">
          <button class="accordion">¿Qué tipo de muebles puedo vender?</button>
          <div class="panel-faqs">
            <br><p>Cualquier mueble de hogar(sillones, sillas, estantes, escritorios, etc)<br><br><br></p>
          </div>
          <button class="accordion">¿Cómo se realizan los envios?</button>
          <div class="panel-faqs">
            <br><p>Envios a todos el país a través de OCA y Correo Argentino<br><br><br></p>
          </div>
          <button class="accordion">¿Cómo puedo cambiar mi mueble ya comprado?</button>
          <div class="panel-faqs">
            <br><p>Si el mueble no satiface tus necesidades, podes elegir cambiarlo por cualquier producto del mismo valor o superior<br><br><br></p>
          </div>
          <button class="accordion">¿Cómo califico a los otros usuarios?</button>
          <div class="panel-faqs">
            <br><p>Según la cantidad de estrellas que decidas ponerle: Muy malo, Malo, Regular, Bueno, Excelente<br><br><br></p>
          </div>
          <button class="accordion">¿Qué es el servicio de venta VIP?</button>
          <div class="panel-faqs">
            <br><p>En el servicio de venta VIP, una vez aprobados tus muebles, armamos tu book de muebles personalizado y te ayudamos con las ventas<br><br><br></p>
          </div>
          <script src="./js/accordion.js"></script>
        </section>
      </section>
@endsection
