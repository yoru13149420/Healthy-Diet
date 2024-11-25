<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Healty Diet</title>
        <link rel="icon" href="{{ asset('圖片/Logo2.png') }}" type="image/png">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
            *,
            ::after,
            ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb;
            }
            body {
            margin: 0;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif;
            }
            a {
            color: inherit;
            text-decoration: inherit;
            }
            .relative {
            position: relative;
            }
            .absolute {
            position: absolute;
            }
            .flex {
            display: flex;
            }
            .grid {
            display: grid;
            }
            .hidden {
            display: none;
            }
            .aspect-video {
            aspect-ratio: 16 / 9;
            }
            .size-12 {
            width: 3rem;
            height: 3rem;
            }
            .h-full {
            height: 100%;
            }
            .w-full {
            width: 100%;
            }
            .max-w-2xl {
            max-width: 42rem;
            }
            .flex-1 {
            flex: 1 1 0%;
            }
            .shade-1 {
            color: rgb(0 0 0 / 0.1);
            }
            .items-center {
            align-items: center;
            }
            .gap-4 {
            gap: 1rem;
            }
            .justify-center {
            justify-content: center;
            }
            .rounded-lg {
            border-radius: 0.5rem;
            }
            .bg-white {
            background-color: #fff;
            }
            .bg-gradient-to-b {
                background: linear-gradient(to bottom, #32CD32, white);
            }
            .from-transparent {
            --tw-gradient-from: transparent;
            --tw-gradient-stops: var(--tw-gradient-from), #fff;
            }
            .to-white {
            --tw-gradient-to: #fff;
            }
            .shadow-lg {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            }
            .text-center {
            text-align: center;
            }
            .font-sans {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif;
            }
            .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
            }
            .text-black {
            color: #000;
            }
            .text-white {
            color: #fff;
            }
            .transition {
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform;
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }
            .duration-300 {
            transition-duration: 300ms;
            }
            </style>
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" style="filter: hue-rotate(120deg);"/>
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <h1>Welcome Healty Diet</h1>
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <h1>Welcome Healty Diet</h1>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/home') }}"
                                        class="rounded-md px-1 py-2 text-black text-xl ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        回到主頁
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-1 py-2 text-black text-xl ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        登入
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-1 py-2 text-black text-xl ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            註冊
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>
                </div>
            </div>
        </div>
    </body>
</html>
