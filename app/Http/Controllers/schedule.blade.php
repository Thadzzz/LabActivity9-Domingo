@extends('layouts.app')

@section('title', 'Full Schedule')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Full Vaccination Schedule</h1>

    <x-panel title="All Vaccinations">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b text-gray-600 text-sm">
                    <th class="py-2">Patient Name</th>
                    <th class="py-2">Purok</th>
                    <th class="py-2">Vaccine</th>
                    <th class="py-2">Dose</th>
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
                        <td class="py-3 text-gray-600">{{ $schedule->dose }}</td>
                        <td class="py-3">{{ $schedule->scheduled_at->format('M d, Y') }}</td>
                        <td class="py-3">
                            <span class="px-2 py-1 text-xs rounded-full 
                                {{ $schedule->status === 'Done' ? 'bg-emerald-100 text-emerald-700' : ($schedule->status === 'Overdue' ? 'bg-red-100 text-red-700 font-bold' : 'bg-blue-100 text-blue-700') }}">
                                {{ $schedule->status }}
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-6 text-gray-500 italic">No schedules yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </x-panel>
@endsection