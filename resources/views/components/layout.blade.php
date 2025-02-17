<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
    @vite('resources/css/app.scss')
    @vite("resources/js/app.js")
</head>
<body class="font-body">
    @if(session('success'))
    <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
        {{ session('success') }}
    </div>
    @endif

    <x-header>
        <div class="right-item">
            <ul role="navigation" class="main-menu">
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
                <li>
                    <a href="#">
                        Login
                    </a>
                </li>
            </ul>
            <div class="mobile-toggle">
                <button class="menu-icon menu-btn">
                    <input class="menu-icon__cheeckbox" type="checkbox" />
                    <div>
                        <span></span>
                        <span></span>
                    </div>
                </button>
            </div>
        </div>
    </x-header>

    <main class="fw-container layout-container">
        {{ $slot }}
    </main>

    <footer>
        <p class="photo-credit">
            SVGs from <a href="https://www.svgrepo.com/" target="_blank">SVGRepo</a> | Font by <a href="https://www.fontspace.com/h-hachimaki-font-f99983" target="_blank">Fontspace and Wepfont</a>
        </p>
    </footer>
</body>
</html>
