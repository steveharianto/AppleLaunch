<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AppleLaunch.id - Selalu Terdepan Bersama Apple')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">
    <header class="bg-black text-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-bold flex items-center">
                <span class="text-3xl mr-2">🍎</span> AppleLaunch.id
            </a>
            <div>
                <span class="hidden md:inline text-gray-400 italic">Selalu Terdepan Bersama Apple</span>
            </div>
            <nav>
                <a href="{{ route('promotions.create') }}" class="bg-white text-black px-4 py-2 rounded hover:bg-gray-200 transition">
                    Tambah Produk
                </a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="bg-black text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-xl font-bold mb-2">AppleLaunch.id</h3>
                    <p class="text-gray-400">Selalu Terdepan Bersama Apple</p>
                </div>
                
                <div class="flex flex-col space-y-2">
                    <h3 class="text-xl font-bold mb-2">Kontak</h3>
                    <a href="mailto:info@applelaunch.id" class="text-gray-400 hover:text-white">info@applelaunch.id</a>
                    <a href="tel:+62212345678" class="text-gray-400 hover:text-white">+62 21 2345678</a>
                </div>
                
                <div class="flex flex-col space-y-2 mt-6 md:mt-0">
                    <h3 class="text-xl font-bold mb-2">Sosial Media</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">Instagram</a>
                        <a href="#" class="text-gray-400 hover:text-white">Twitter</a>
                        <a href="#" class="text-gray-400 hover:text-white">Facebook</a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-500">
                &copy; {{ date('Y') }} AppleLaunch.id. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>
