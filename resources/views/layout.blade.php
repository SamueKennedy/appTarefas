<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sistema de Tarefas</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container text-white justify-content-center">
            <h1>Sistema de Tarefas</h1>
        </div>
    </nav>
    <main class="container flex-grow-1">
        @yield('conteudo')
    </main>
    <footer class="bg-secondary-subtle p-2">
        <div class="container">
            <p class="mb-0"><?= date('Y') ?> - Todos os direitos são reservados</p>
        </div>
    </footer>

    <script src="{{asset('assets/js/main.js')}}"></script>
      
    </script>
</body>

</html>
