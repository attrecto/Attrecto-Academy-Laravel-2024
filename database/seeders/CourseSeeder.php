<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Elso pelda title',
                'description' => 'Elso pelda description',
                'author' => 'Author egy',
                'url' => 'http://courseegy.hu',
            ],
            [
                'title' => 'Masodik pelda title',
                'description' => 'Masodik pelda description',
                'author' => 'Author ketto',
                'url' => 'http://courseketto.hu',
            ],
        ];

        foreach ($courses as $course) {
            
        }
    }
}
