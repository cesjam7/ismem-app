<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Gestión de Estudiantes</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <div class="container">
           <a class="navbar-brand" href="{{ route('estudiantes.index') }}">Gestión Estudiantes</a>
       </div>
   </nav>

   <main class="py-4">
       @yield('content')
   </main>

   <footer class="bg-dark text-white text-center py-3">
       © {{ date('Y') }} Gestión de Estudiantes. Todos los derechos reservados.
   </footer>
</body>
</html>
