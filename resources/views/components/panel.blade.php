@props(['title'])

<div class="bg-white rounded shadow mb-6">
    <div class="border-b p-4 bg-gray-50 rounded-t">
        <h2 class="font-bold text-gray-700">{{ $title }}</h2>
    </div>
    <div class="p-4">
        {{ $slot }}
    </div>
</div>