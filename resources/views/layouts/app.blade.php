<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD de Productos</title>

    {{-- Si el paquete CRUD (Ibex/crud-generator) usa Bootstrap, 
        puedes necesitar estos assets, si los configuraste con Laravel UI: --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
</head>
<body>
    <div id="app">
        <main class="py-4">
            {{-- ESTA DIRECTIVA RECIBE EL CONTENIDO DE TU VISTA product.index --}}
            @yield('content') 
        </main>
    </div>
</body>
</html>