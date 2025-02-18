<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
    @vite("resources/css/app.scss")
</head>
<body class="font-body home-layout">
    <main>
        <x-header>
            <ul>
                <li><a class="btn btn--primary" href="/ninjas">Find some Ninjas</a></li>
            </ul>
        </x-header>
        <section class="hero fw-container">
            <div class="quotes">
                <span class="separator">
                    <x-shuriken></x-shuriken>
                </span>
                <div class="sayings">
                    <p>Discipline</p>
                    <p>Turtles? Maybe</p>
                    <p>Deadly weapons? Sure!</p>
                </div>
            </div>
            <video width="4096" height="2160" autoplay muted loop>
                <source src="../images/7777446-uhd_4096_2160_25fps.mp4" type="video/mp4">
            </video>
            <div class="overlay"></div>
            <div class="hero-content">
                <h2>The (Fake)<br>Ninja Network</h2>
                <div class="content max-w-md lg:max-w-xl">
                    <p><a href="https://www.youtube.com/playlist?list=PL4cUxeGkcC9gF5Gez17eHcDIxrpVSBuVt" target="_blank">Net Ninja's Laravel YouTube Course</a> pushed to the Max</p>
                </div>
                <a href="/ninjas" class="btn btn--primary mt-4 hidden lg:inline-block">
                    Find some Ninjas
                </a>
            </div>
            <p class="photo-credit">
                Video by <a href="https://www.pexels.com/video/man-wearing-costume-looking-at-camera-7777446/" target="_blank">cottonbro studio</a> on Pexels | Font by <a href="https://www.fontspace.com/h-hachimaki-font-f99983" target="_blank">Fontspace and Wepfont</a>
            </p>
            <x-shuriken class="animated"></x-shuriken>
        </section>
    </main>
</body>
</html>
