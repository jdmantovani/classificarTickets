<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Postagem - @yield('titulo')</title>
</head>
<body>
    <nav>
        <ul>
            <li>Home</li>
            <li>Tickets</li>
            <li>Contato</li>
        </ul>
    </nav>
    <h1>Classificação de Tickets</h1>
    <p>Teste</p>

    <main role="mais">

        @yield('main')

    </main>

    <footer>Copyrigth 2021</footer>

</body>
</html>
