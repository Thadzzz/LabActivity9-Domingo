<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Bakuna Tracker')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">
    
    <!-- Navigation -->
    <nav class="bg-white shadow p-4 flex justify-between items-center">
        <div class="text-xl font-bold text-emerald-600">
            Bakuna Tracker - Purok Domingo
        </div>
        
        <div class="flex items-center gap-4 text-sm">
            @auth
                <span class="text-gray-700">Hi, <span class="font-semibold">{{ auth()->user()->name }}</span></span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button class="text-red-600 hover:text-red-800 underline">Logout</button>
                </form>
            @endauth
            
            @guest
                <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 font-medium">Sign in</a>
            @endguest
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto p-6">
        @yield('content')
    </main>

</body>
</html>