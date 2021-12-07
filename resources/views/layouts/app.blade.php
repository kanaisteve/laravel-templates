<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('layouts.head')
  <body>

    <!-- ======= Header ======= -->
    @include('layouts.header')

    <!-- ======= Sidebar ======= -->
    @include('layouts.sidebar')

    <main id="main" class="main">
      @yield('content')
    </main><!-- End #main -->

    @include('layouts.modals')
    @include('layouts.footer')
    @include('layouts.scripts')

  </body>
</html>