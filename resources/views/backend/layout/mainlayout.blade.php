<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.layout.partials.head')
</head>
<body>
<div class="app">
    <div class="layout">
        @include('backend.layout.partials.nav')
        <div class="page-container">

            @include('backend.layout.partials.header')
            @include('backend.layout.partials.slidebar')

            @yield('content')
            @include('backend.layout.partials.footer')
        </div>
    </div>
</div>
@include('backend.layout.partials.footer-scripts')
</body>

