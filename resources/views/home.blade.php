@extends('layouts.web')

@section('home')
  {{-- Presentación --}}
  <section class="presentation container">
    <div class="presentation-inner">
      <div class="data">
        <h1 class="heading">
          El <span class="color-primary">sistema de gestión definitivo</span> para tu centro deportivo
        </h1>
        <a class="btn-normal" href="#">
          Entérate más
        </a>
      </div>
      <div class="img">
        <img class="" src="{{asset('/img/principal-sp2.png')}}" alt="Vista referencial de la App de NFIT">
      </div>
    </div>
  </section>

  {{-- Introduccion --}}
  <section class="intro">
    <div class="intro-inner container mx-auto">
      <h2 class="text-center">
        Una <span class="color-secondary">plataforma</span> para tu centro deportivo<br>Una <span class="color-primary">app</span> para tu comunidad
      </h2>
      <div class="features">
        <div class="item text-center">
          <img class="" src="{{asset('/img/feat-1.png')}}">
          <h3 class="">Registro y control<br>de pagos</h3>
          <p class="">Registra a tus alumnos y lleva el control de sus pagos y membresía.</p>
        </div>
        <div class="item text-center">
          <img class="" src="{{asset('/img/feat-2.png')}}">
          <h3 class="">Administración<br>de las clases</h3>
          <p class="">Crea planes y clases que tus alumnos podrán reservar desde la app.</p>
        </div>
        <div class="item text-center">
          <img class="" src="{{asset('/img/feat-3.png')}}">
          <h3 class="">Reportes y<br>Analytics</h3>
          <p class="">Estadísticas, datos y análisis de información para tomar las mejores decisiones.</p>
        </div>
        <div class="item text-center">
          <img class="" src="{{asset('/img/feat-4.png')}}">
          <h3 class="">Gestión de la<br>Comunidad</h3>
          <p class="">Envía correos automatizados, avisos y notificaciones a través de la app.</p>
        </div>
      </div>
    </div>
  </section>

  {{-- Presentacion app --}}
  <section class="spec-presentation">
    <div class="spec-presentation-inner container">
      <div class="img">
        <img class="" src="{{asset('/img/app-pres-1.png')}}" alt="NFIT App">
      </div>
      <div class="data">
        <h2 class="">
          Una <span class="color-primary">app</span> que tu<br>comunidad agradecerá
        </h2>
        <ul class="">
          <li>Reserva y confirmación de clases</li>
          <li>Revisión del entrenamiento del día</li>
          <li>Tomar notas de las clases</li>
          <li>Ver datos de asistencia.</li>
          <li>Ver historial de pagos realizados.</li>
          <li>Recibe notificaciones push personalizadas</li>
        </ul>
        {{-- <a class="btn-normal" href="/app">
          Conócela en Detalle
        </a> --}}
      </div>
    </div>
  </section>

  {{-- Presentacion Admin --}}
  <section class="spec-presentation inverse">
    <div class="spec-presentation-inner container">
      <div class="img outside">
        <img class="" src="{{asset('/img/admin-pres-1.png')}}" alt="NFIT Admin">
      </div>
      <div class="data">
        <h2 class="">
          El <span class="color-secondary">software de gestión</span> que tu centro deportivo necesita
        </h2>
        <ul class="">
          <li>Gestiona las clases y la asistencia</li>
          <li>Administra los pagos de cada alumno</li>
          <li>Gráficos y datos de las estadísticas actualizadas</li>
          <li>Crea y modifica planes para tus alumnos</li>
          <li>Mensajería push personalizada</li>
        </ul>
        {{-- <a class="btn-normal" href="/admin">
          Conócelo en Detalle
        </a> --}}
      </div>
    </div>
  </section>

  {{-- Planes --}}
  <section class="planes">
    <div class="planes-inner container">
      <h1 class="text-center">Planes que van con los objetivos de tu negocio</h1>
      <div class="planes-switcher">
        <button class="btn-toggle">
          Mensual
        </button>
        <button class="btn-toggle active">
          Anual
        </button>
      </div>

      <div class="los-planes beta">

        {{-- Planes no Disponibles: Version Beta --}}
        <div class="precios-beta">
          <div class="precios-beta-inner">
            <h2>
              <span class="color-secondary">
                Planes no disponibles en versión Beta
              </span>
            </h2>
            <p>
              Estamos trabajando duro para poner a tu disposición planes convenientes para tu negocio. Mientras puedes probar la app y vivir la experiencia NFIT.
            </p>
          </div>
        </div>

        <div class="item">
          <h3 class="color-primary text-center">Plan Starter</h3>
          <hr>
          <h2 class="text-center">Gratis</h2>
          <p class="text-center">Para Siempre</p>
          <hr>
          <ul class="color-gray">
            <li>Hasta 10 alumnos</li>
            <li>Incluye todas las funciones de gestión, comunidad y reportes de la plataforma</li>
            <li>Incluye todas las funciones de la aplicación</li>
          </ul>
          <a class="btn-normal text-center" href="#">Pruébalo Ahora</a>
        </div>

        <div class="item highlighten">
          <h3 class="color-primary text-center">Plan Full</h3>
          <hr>
          <h2 class="text-center">$15.000</h2>
          <p class="text-center">Mensual + $250 por usuario</p>
          <hr>
          <ul class="color-gray">
            <li>Alumnos ilimitados</li>
            <li>Incluye todas las funciones de gestión, comunidad y reportes de la plataforma</li>
            <li>Incluye todas las funciones de la aplicación</li>
          </ul>
          <a class="btn-highlight text-center" href="#">Pruébalo Gratis</a>
        </div>

        <div class="item">
          <h3 class="color-primary color-primary text-center">Plan Élite</h3>
          <hr>
          <h2 class="text-center">$25.000</h2>
          <p class="text-center">Mensual + $250 por usuario</p>
          <hr>
          <ul class="color-gray">
            <li>Incluye todas las características del Plan Full</li>
            <li>Incluye asesoría de finanzas, contable y soporte directo</li>
            <li>Incluye POS (punto de venta)</li>
            <li>Incluye Contabilidad Automatizada (14TER)</li>
          </ul>
          <a class="btn-normal text-center" href="#">Contrátalo Ahora</a>
        </div>
      </div>
    </div>
  </section>

  {{-- Personaliza la App --}}
  {{-- <section class="personaliza">
    <div class="personaliza-inner container">
      <h2 class="text-center">+</h2>
      <h2 class="text-center color-primary">
        Personaliza la Aplicación<br>para tu Comunidad
      </h2>
      <div class="items">
        <ul>
          <li>Tu aplicación en el App Store y Play Store con tu nombre</li>
          <li>Agrega el logo de tu centro deportivo</li>
        </ul>
        <ul>
          <li>Personaliza los colores de la aplicación por los de tu marca</li>
          <li>Personaliza la tipografía para que coincida con tu marca</li>
        </ul>
        <ul>
          <li>Personaliza los colores de la aplicación por los de tu marca</li>
          <li>Personaliza los colores de la aplicación por los de tu marca</li>
        </ul>
      </div>
      <div class="text-center">
        <a class="btn-normal" href="#">
          Contáctanos
        </a>
      </div>
    </div>
  </section> --}}

  {{-- Promo --}}
  {{-- <section class="promo-full" style="background-image: url('{{asset('/img/back-promo.jpg')}}')">
    <div class="promo-inner container text-center">
      <h1 class="">
        Prueba <span class="color-primary">un Mes Gratis</span><br>de Plan Full
      </h1>
      <p class="">
        Prueba gratis todas las funciones de un Plan Full y cancela cuando quieras, sin compromiso.
      </p>
      <a class="btn-highlight" href="#">
        Pruébalo Ahora
      </a>
    </div>
  </section> --}}
  <section class="promo-full" style="background-image: url('{{asset('/img/back-promo.jpg')}}')">
    <div class="promo-inner container text-center">
      <h1 class="">
        <span class="color-primary">Prueba la App</span> antes de su lanzamiento
      </h1>
      <p class="">
        Inscribe tu centro deportivo en nuestro programa Beta y prueba la applicación gratis antes que nadie.
      </p>
      <a class="btn-highlight window-trigger" href="#">
        Únete Ahora
      </a>
    </div>
  </section>

  {{-- Descarga la App --}}
  {{-- <section class="app-promo-full" >
    <div class="app-promo-inner container text-center">
      <h1 class="">
        <span class="color-primary">Descarga la App<br>Gratis</span>
      </h1>
      <p class="">
        Disponible para Android y iPhone.<br>Descárgala en la Play Store o App Store
      </p>
      <div class="buttons">
        <a class="btn-normal" href="#">
          <img class="" src="{{asset('/img/icon-apple.png')}}">
          App Store
        </a>
        <a class="btn-normal" href="#">
          <img class="" src="{{asset('/img/icon-play-store.png')}}">
          Play Store
        </a>
      </div>
    </div>
  </section> --}}
@endsection
