<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'campus_id'=>'0001',
            'name'=>'mashrafee',
            'profile_image'=> 'bird-g585a027dc_1920.jpg',
            'subject'=>'EEE'
        ]);

        Student::create([
            'campus_id'=>'0002',
            'name'=>'tamim',
            'profile_image'=> 'bouquet-g2b45b7744_1920.jpg',
            'subject'=>'CSE'
        ]);

        Student::create([
            'campus_id'=>'0003',
            'name'=>'mushfiq',
            'profile_image'=> 'elephant-g870c12e2c_1920.jpg',
            'subject'=>'EEE'
        ]);

        Student::create([
            'campus_id'=>'0004',
            'name'=>'riad',
            'profile_image'=> 'field-ge5a40a456_1920.jpg',
            'subject'=>'Civil'
        ]);

        Student::create([
            'campus_id'=>'0005',
            'name'=>'mehdi',
            'profile_image'=> 'flower-g72913b314_1920.jpg',
            'subject'=>'ECE'
        ]);
    }
}
