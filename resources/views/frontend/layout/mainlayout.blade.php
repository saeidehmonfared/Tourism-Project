<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layout.partials.head')
</head>
<body>
@include('frontend.layout.partials.header')
@include('frontend.layout.partials.nav')
@yield('content')
@include('frontend.layout.partials.footer')
@include('frontend.layout.partials.footer-scripts')
@yield('scripts')
</body>
