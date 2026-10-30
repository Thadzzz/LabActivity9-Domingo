<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vaccination;

class VaccinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            [
                'patient_name' => 'Ray Dominguez', 
                'purok' => 'Purok 2', 
                'vaccine' => 'BCG',
                'dose' => '2nd dose', 
                'scheduled_at' => '2026-12-04', 
                'status' => 'Scheduled'
            ],
            [
                'patient_name' => 'Jhon Man Martinez', 
                'purok' => 'Purok 4', 
                'vaccine' => 'Anti-Flu',
                'dose' => 'Annual', 
                'scheduled_at' => '2026-04-03', 
                'status' => 'Overdue'
            ],
            [
                'patient_name' => 'Maria Santos', 
                'purok' => 'Purok 1', 
                'vaccine' => 'Pentavalent',
                'dose' => '3rd dose', 
                'scheduled_at' => '2026-11-15', 
                'status' => 'Done'
            ],
            [
                'patient_name' => 'Baby Boy Cruz', 
                'purok' => 'Purok 3', 
                'vaccine' => 'OPV',
                'dose' => '1st dose', 
                'scheduled_at' => '2026-12-01', 
                'status' => 'Scheduled'
            ],
            [
                'patient_name' => 'Ana Reyes', 
                'purok' => 'Purok 2', 
                'vaccine' => 'MMR',
                'dose' => '2nd dose', 
                'scheduled_at' => '2026-10-10', 
                'status' => 'Overdue'
            ],
            [
                'patient_name' => 'Pedro Penduko', 
                'purok' => 'Purok 5', 
                'vaccine' => 'Hepatitis B',
                'dose' => '1st dose', 
                'scheduled_at' => '2026-11-20', 
                'status' => 'Scheduled'
            ],
            [
                'patient_name' => 'Thaddeus Domingo', 
                'purok' => 'Purok 4', 
                'vaccine' => 'Booster', 
                'dose' => '1st dose', 
                'scheduled_at' => '2026-03-04', 
                'status' => 'Scheduled'
            ],
        ];

        foreach ($rows as $row) {
            Vaccination::create($row);
        }
    }
}