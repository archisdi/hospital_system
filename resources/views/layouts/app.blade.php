<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

@include('layouts.header_script')

    @if (!Auth::guest())
    <body class="hold-transition skin-red sidebar-mini">
    @else
        <body class="hold-transition skin-red layout-top-nav">

        @endif

    <div class="wrapper">

        @include('layouts.header')

        @include('layouts.sidebar')

        <div class="content-wrapper">
            @yield('content')
        </div>

        @include('layouts.footer')

    </div>

    @include('layouts.footer_script')

    </body>
</html>
