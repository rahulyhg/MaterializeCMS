<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('partials.metas')
    <title>@yield('title') | Materialze CMS</title>
    @include('partials.styles')
  </head>
  <body>
    <div id="app">
      <header>
        @include('partials.nav.top')
        @include('partials.nav.side')
      </header>
      <main>
        @yield('content')
      </main>
      @include('partials.footer')
    </div>

    @include('partials.scripts')
    @yield('scripts')
  </body>
</html>