@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1 class="text-2xl font-bold mb-6">{{ $title }}</h1>

    @if($alerts->count() > 0)
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded shadow-sm">
            <p class="font-bold">Attention!</p>
            <p>There are {{ $alerts->count() }} overdue vaccinations that need immediate follow-up.</p>
        </div>
    @elseif($stats[1]['value'] > 5)
        <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mb-6 rounded shadow-sm">
            <p class="font-bold">Great job!</p>
            <p>More than 5 vaccinations have been completed.</p>
        </div>
    @else
        <div class="bg-emerald-100 border-l-4 border-emerald-500 text-emerald-700 p-4 mb-6 rounded shadow-sm">
            <p class="font-bold">All clear!</p>
            <p>No overdue alerts at this time.</p>
        </div>
    @endif

    <div class="grid gap-4 md:grid-cols-4 mb-8">
        @foreach($stats as $stat)
            <x-stat-card :title="$stat['label']" :value="$stat['value']" />
        @endforeach
    </div>

    <x-panel title="Vaccination Schedule">
        
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b text-gray-600 text-sm">
                    <th class="py-2">Patient Name</th>
                    <th class="py-2">Purok</th>
                    <th class="py-2">Vaccine</th>
                    <th class="py-2">Schedule</th>
                    <th class="py-2">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($schedules as $schedule)
                    <tr class="border-b {{ $loop->odd ? 'bg-gray-50' : '' }}">
                        <td class="py-3 font-medium">{{ $schedule->patient_name }}</td>
                        <td class="py-3 text-gray-600">{{ $schedule->purok }}</td>
                        <td class="py-3">{{ $schedule->vaccine }}</td>
                        <td class="py-3">{{ $schedule->scheduled_at->format('M d, Y') }}</td>
                        <td class="py-3">
                            @unless($schedule->status === 'Overdue')
                                <span class="px-2 py-1 text-xs rounded-full 
                                    {{ $schedule->status === 'Done' ? 'bg-emerald-100 text-emerald-700' : 'bg-blue-100 text-blue-700' }}">
                                    {{ $schedule->status }}
                                </span>
                            @endunless

                            @if($schedule->status === 'Overdue')
                                <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-700 font-bold">
                                    Overdue
                                </span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-6 text-gray-500 italic">No schedules yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        
    </x-panel>
@endsection