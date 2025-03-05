<html lang="pt-br" data-bs-theme="dark">
<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site para trazer esporte a vida sem custo !">
    <title>Esporte-se</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    {{-- Styles --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/detalhes.css') }}" rel="stylesheet">
    {{-- JavaScript --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/vue.js') }}"></script>

</head>

<body>
    @include('layouts.parcial.topo')
    @yield('banner')
    <main>
        @yield('content')
    </main>
    @include('layouts.parcial.toggle')
</body>