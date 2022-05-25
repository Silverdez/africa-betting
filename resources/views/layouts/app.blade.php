<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@section('header')
  @include('partials.header')
@show

<main class="main" data-scroll-content>
  <div class="content" data-barba="container">
    @yield('content')
  </div>
</main>

@section('footer')
  @include('partials.footer')
@show
