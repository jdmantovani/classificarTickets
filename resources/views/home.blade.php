<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <ul>
        <li>
            <a href="{{ route('home') }}">HOME</a>
        </li>
        <li>
            <a href="{{ route('ola', ['Joana', 'Mantovani']) }}">OLA</a>
        </li>
        <li>
            <a href="{{ route('contato') }}">CONTATO</a>
        </li>
    </ul>

    <h1>Classificação de tickets</h1>
    <p>Página inicial</p>

    <h3>Seja bem vindo(a)</h3>
    <p>Mais um parágrafo</p>

</body>
</html>
