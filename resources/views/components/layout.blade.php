<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
    @vite('resources/css/app.css')
</head>
<body class="font-body">
    @if(session('success'))
    <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
        {{ session('success') }}
    </div>
    @endif

    <header>
        <nav>
            <h1>
                <x-logo></x-logo>
            </h1>
            <ul>
                <li>
                    <a href="{{ route('ninjas.index') }}">
                        All Ninjas
                    </a>
                </li>
                <li>
                    <a href="{{ route('ninjas.create') }}">
                        Create New Ninja
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>
