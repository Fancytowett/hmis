<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('dash.partials.header')
<body>
@include('dash.partials.sidenav')
<div class="page">
    @include('dash.partials.nav_header')


    @include('dash.partials.footer')

</div>

@include('dash.partials.my_scripts')
</body>
</html>