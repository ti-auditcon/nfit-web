@extends('layouts.web')

@section('home')

  {{-- Page Heading --}}
  <section class="page-heading pb-10 mx-auto w-4/6 pt-12">
    <div class="page-heading-inner container mx-auto ">
      <h2 class="xl:text-5xl font-bold leading-tight mb-8 text-center">
        Una app que <span class="text-nfit-primary">tu comunidad<br>agradecerá</span>
      </h2>
      <p class="text-lg text-center mx-auto w-4/6">
        Cras a est nisl. Nam congue eros vitae massa ultrices sagittis. Integer pharetra et tellus at luctus.
      </p>
    </div>
  </section>

  {{-- Feature Right --}}
  <section class="pt-12 pb-8">
    <div class="container mx-auto flex justify-between">
      <div class="img w-1/2">
        <img class="w-4/5" src="{{asset('/img/app-pres-rr.png')}}" alt="NFIT App">
      </div>
      <div class="data w-1/2 self-center">
        <h2 class="text-4xl font-bold leading-tight mb-8">
          <span class="text-nfit-primary">Reserva de Clases</span> en la palma de tu mano
        </h2>
        <p class="text-lg w-3/4">
          Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in. Luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
        </p>
      </div>
    </div>
  </section>

  {{-- Feature Right --}}
  <section class="pt-4 pb-8">
    <div class="container mx-auto flex justify-between">
      <div class="data w-4/5 self-center">
        <h2 class="text-4xl font-bold leading-tight mb-8 w-3/4">
          <span class="text-nfit-primary">Revisar los entrenamientos</span> del día
        </h2>
        <p class="text-lg w-3/4">
          Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in. Luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
        </p>
      </div>
      <div class="img w-3/5 pl-32">
        <img class="" src="{{asset('/img/app-pres-dd.png')}}" alt="NFIT App">
      </div>
    </div>
  </section>

  {{-- Feature Right --}}
    <section class="pb-16">
      <div class="container mx-auto flex justify-between">
        <div class="img w-1/2">
          <img class="w-4/5" src="{{asset('/img/app-pres-rl.png')}}" alt="NFIT App">
        </div>
        <div class="data w-1/2 self-center">
          <h2 class="text-4xl font-bold leading-tight mb-8">
            Otra característica <span class="text-nfit-primary">sorprendente</span>
          </h2>
          <p class="text-lg w-3/4">
            Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in. Luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
          </p>
        </div>
      </div>
    </section>

  {{-- Another features --}}
  <section class="an-features pt-8 pb-16">
    <div class="container mx-auto">
      <h2 class="text-4xl font-bold text-center leading-tight mb-20 w-full">Y muchas otras características<br>escenciales...</h2>
      <div class="flex items-container flex-wrap">
        <div class="flex w-1/3 item flex-wrap px-10 pb-12">
          <div class="block icon-text mb-4">
            <img src="{{asset('/img/feat-1.png')}}" class="inline-block w-12 align-top">
            <h4 class="text-xl font-bold ml-6 leading-tight inline-block">Registro y control<br>de pagos</h4>
          </div>
          <div class="explain flex">
            <p class="font-normal text-base leading-snug">
              Luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
            </p>
          </div>
        </div>
        <div class="flex w-1/3 item flex-wrap px-10 pb-12">
          <div class="block icon-text mb-4">
            <img src="{{asset('/img/feat-2.png')}}" class="inline-block w-12 align-top">
            <h4 class="text-xl font-bold ml-6 leading-tight inline-block">Administración de<br>las clases</h4>
          </div>
          <div class="explain flex">
            <p class="font-normal text-base leading-snug">
              Luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
            </p>
          </div>
        </div>
        <div class="flex w-1/3 item flex-wrap px-10 pb-12">
          <div class="block icon-text mb-4">
            <img src="{{asset('/img/feat-3.png')}}" class="inline-block w-12 align-top">
            <h4 class="text-xl font-bold ml-6 leading-tight inline-block">Estadísticas<br>actualizadas</h4>
          </div>
          <div class="explain flex">
            <p class="font-normal text-base leading-snug">
              Luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
            </p>
          </div>
        </div>
        <div class="flex w-1/3 item flex-wrap px-10 pb-12">
          <div class="block icon-text mb-4">
            <img src="{{asset('/img/feat-2.png')}}" class="inline-block w-12 align-top">
            <h4 class="text-xl font-bold ml-6 leading-tight inline-block">Registro y control<br>de pagos</h4>
          </div>
          <div class="explain flex">
            <p class="font-normal text-base leading-snug">
              Luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
            </p>
          </div>
        </div>
        <div class="flex w-1/3 item flex-wrap px-10 pb-12">
          <div class="block icon-text mb-4">
            <img src="{{asset('/img/feat-3.png')}}" class="inline-block w-12 align-top">
            <h4 class="text-xl font-bold ml-6 leading-tight inline-block">Administración de<br>las clases</h4>
          </div>
          <div class="explain flex">
            <p class="font-normal text-base leading-snug">
              Luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
            </p>
          </div>
        </div>
        <div class="flex w-1/3 item flex-wrap px-10 pb-12">
          <div class="block icon-text mb-4">
            <img src="{{asset('/img/feat-1.png')}}" class="inline-block w-12 align-top">
            <h4 class="text-xl font-bold ml-6 leading-tight inline-block">Estadísticas<br>actualizadas</h4>
          </div>
          <div class="explain flex">
            <p class="font-normal text-base leading-snug">
              Luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Conoce admin --}}
  <section class="promo-app-features pt-24 pb-40 mb-6 relative">
    <div class="features-inner container mx-auto flex justify-between">
      <div class="data w-1/2 self-center">
        <h2 class="text-4xl font-bold leading-tight mb-8">
          <span class="text-nfit-secondary">El Control</span> que tu centro deportivo necesita
        </h2>
        <p class="mb-12 text-lg">
          Aenean congue ligula ac ipsum consectetur placerat eget dictum odio, vivamus at suscipit velit, et facilisis sem.
        </p>
        <a class="btn-normal" href="/admin">
          Conócela en Detalle
        </a>
      </div>
      <div class="img w-1/2 flex">
        <img class="w-3/5 absolute mx-auto self-center pl-24" src="{{asset('/img/admin-pres-1.png')}}" alt="NFIT App">
      </div>
    </div>
  </section>

  {{-- Promo --}}
  <section class="promo-full bg-center bg-cover w-full py-40" style="background-image: url('{{asset('/img/back-promo.jpg')}}')">
    <div class="promo-inner container mx-auto text-center">
      <h2 class="text-5xl font-bold leading-tight mb-8">Prueba <span class="text-nfit-primary">un Mes Gratis</span><br>de Plan Full</h2>
      <p class="mb-12 w-5/12 mx-auto text-lg">
        Prueba gratis todas las funciones de un Plan Full y cancela cuando quieras, sin compromiso.
      </p>
      <a class="btn-highlight" href="#">
        Pruébalo Ahora
      </a>
    </div>
  </section>

  {{-- Footer --}}
  <footer class="w-full bg-nfit-darker py-16">
    <div class="container mx-auto flex justify-between">
      <div class="links">
        <a href="#" class="mr-12 text-nfit-gray">Preguntas frecuentes</a>
        <a href="#" class="mr-12 text-nfit-gray">Políticas de Privacidad</a>
        <a href="#" class="mr-12 text-nfit-gray">Contacto</a>
      </div>
      <div class="rrss flex">
        <a href="#" class="ml-6">
          <img src="{{asset('/img/facebook_icon.png')}}">
        </a>
        <a href="#" class="ml-6">
          <img src="{{asset('/img/instagram_icon.png')}}">
        </a>
      </div>
    </div>
  </footer>
@endsection
