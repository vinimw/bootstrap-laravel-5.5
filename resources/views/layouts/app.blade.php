<html>
<head>
    <title>CUT Brasil - @yield('title')</title>
</head>
<body>
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
@stack('css')
<div class="container">
    @yield('content')
</div>
<script src="{{ mix('/js/app.js') }}"></script>
@stack('scripts')
</body>
</html>