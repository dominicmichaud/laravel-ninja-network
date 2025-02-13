<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
    @vite("resources/css/app.css")

</head>
<body class="font-body">
    <main>
        <x-header>
            <ul>
                <li><a class="btn inline-block md:hidden" href="/ninjas">Find some Ninjas</a></li>
            </ul>
        </x-header>
        <section class="hero fw-container">
            <video width="4096" height="2160" autoplay muted loop>
                <source src="../images/7777446-uhd_4096_2160_25fps.mp4" type="video/mp4">
            </video>
            <div class="overlay"></div>
            <div class="hero-content">
                <h2>Master Stealth<br>and Secrecy!</h2>
                <p>The Ninja Network Database</p>
                <a href="/ninjas" class="btn mt-4 inline-block">
                    Find some Ninjas
                </a>
            </div>
            <p class="photo-credit">
                Video by <a href="https://www.pexels.com/video/man-wearing-costume-looking-at-camera-7777446/" target="_blank">cottonbro studio</a> on Pexels | Font by <a href="https://www.fontspace.com/h-hachimaki-font-f99983" target="_blank">Fontspace and Wepfont</a>
            </p>
            <x-shuriken></x-shuriken>
        </section>
    </main>
</body>
</html>
