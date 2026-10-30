@extends('layouts.app')
@section('title', 'Sign in')

@section('content')
<div class="max-w-md mx-auto mt-12 p-8 bg-white rounded-lg shadow-md border border-gray-200">
    
    <div class="text-center mb-8">
        <h1 class="text-2xl font-bold text-emerald-700">Bakuna Tracker</h1>
        <p class="text-gray-500 text-sm mt-1">Sign in to access the health center dashboard</p>
    </div>

    <form method="POST" action="/login" class="space-y-5">
        @csrf
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="nurse@bakuna.test"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500">
            @error('email') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" name="password" placeholder="••••••••" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500">
            @error('password') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <button class="w-full bg-emerald-600 text-white font-semibold py-2 rounded-md hover:bg-emerald-700 transition duration-200">
            Sign in
        </button>
    </form>
</div>
@endsection