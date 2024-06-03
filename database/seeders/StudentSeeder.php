<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\HiredStudent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HiredStudent::create([
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'name' => 'Adi Kurniawan',
            'nis' => 123456,
            'place_birth' => 'Jakarta',
            'date_birth' => '2004-01-01',
            'email' => 'adi@example.com',
            'school_origin' => 'SMA Negeri 1 Jakarta',
            'major' => 'Teknik Mesin',
            'age' => 18,
            'height' => 160,
            'weight' => 45,
            'experience' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia itaque obcaecati debitis voluptates ducimus tenetur est alias voluptate facilis excepturi.',
            'role' => 'mechanic',
            'batch' => 1,
            'hasRecruit' => false
        ]);

        HiredStudent::create([
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'name' => 'Budi Santoso',
            'nis' => 123457,
            'place_birth' => 'Bandung',
            'date_birth' => '2002-02-02',
            'email' => 'budi@example.com',
            'school_origin' => 'SMA Negeri 2 Bandung',
            'major' => 'Teknik Elektro',
            'age' => 20,
            'height' => 165,
            'weight' => 50,
            'experience' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia itaque obcaecati debitis voluptates ducimus tenetur est alias voluptate facilis excepturi.',
            'role' => 'operator',
            'batch' => 1,
            'hasRecruit' => false
        ]);

        HiredStudent::create([
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'name' => 'Citra Dewi',
            'nis' => 123458,
            'place_birth' => 'Surabaya',
            'date_birth' => '2001-03-03',
            'email' => 'citra@example.com',
            'school_origin' => 'SMA Negeri 3 Surabaya',
            'major' => 'Teknik Mesin',
            'age' => 22,
            'height' => 155,
            'weight' => 48,
            'experience' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia itaque obcaecati debitis voluptates ducimus tenetur est alias voluptate facilis excepturi.',
            'role' => 'mechanic',
            'batch' => 1,
            'hasRecruit' => false
        ]);

        HiredStudent::create([
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'name' => 'Dian Sari',
            'nis' => 123459,
            'place_birth' => 'Medan',
            'date_birth' => '2003-04-04',
            'email' => 'dian@example.com',
            'school_origin' => 'SMA Negeri 4 Medan',
            'major' => 'Teknik Elektro',
            'age' => 19,
            'height' => 162,
            'weight' => 47,
            'experience' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia itaque obcaecati debitis voluptates ducimus tenetur est alias voluptate facilis excepturi.',
            'role' => 'operator',
            'batch' => 1,
            'hasRecruit' => false
        ]);

        HiredStudent::create([
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'name' => 'Eko Prasetyo',
            'nis' => 123460,
            'place_birth' => 'Yogyakarta',
            'date_birth' => '2001-05-05',
            'email' => 'eko@example.com',
            'school_origin' => 'SMA Negeri 5 Yogyakarta',
            'major' => 'Teknik Mesin',
            'age' => 21,
            'height' => 170,
            'weight' => 55,
            'experience' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia itaque obcaecati debitis voluptates ducimus tenetur est alias voluptate facilis excepturi.',
            'role' => 'mechanic',
            'batch' => 1,
            'hasRecruit' => false
        ]);

        HiredStudent::create([
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'name' => 'Fita Rahayu',
            'nis' => 123461,
            'place_birth' => 'Semarang',
            'date_birth' => '2000-06-06',
            'email' => 'fita@example.com',
            'school_origin' => 'SMA Negeri 6 Semarang',
            'major' => 'Teknik Elektro',
            'age' => 23,
            'height' => 158,
            'weight' => 49,
            'experience' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia itaque obcaecati debitis voluptates ducimus tenetur est alias voluptate facilis excepturi.',
            'role' => 'operator',
            'batch' => 1,
            'hasRecruit' => false
        ]);

        HiredStudent::create([
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'name' => 'Gita Wijaya',
            'nis' => 123462,
            'place_birth' => 'Malang',
            'date_birth' => '2002-07-07',
            'email' => 'gita@example.com',
            'school_origin' => 'SMA Negeri 7 Malang',
            'major' => 'Teknik Mesin',
            'age' => 20,
            'height' => 165,
            'weight' => 52,
            'experience' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia itaque obcaecati debitis voluptates ducimus tenetur est alias voluptate facilis excepturi.',
            'role' => 'mechanic',
            'batch' => 1,
            'hasRecruit' => false
        ]);

        HiredStudent::create([
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'name' => 'Hadi Setiawan',
            'nis' => 123463,
            'place_birth' => 'Palembang',
            'date_birth' => '1999-08-08',
            'email' => 'hadi@example.com',
            'school_origin' => 'SMA Negeri 8 Palembang',
            'major' => 'Teknik Elektro',
            'age' => 24,
            'height' => 175,
            'weight' => 60,
            'experience' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia itaque obcaecati debitis voluptates ducimus tenetur est alias voluptate facilis excepturi.',
            'role' => 'operator',
            'batch' => 1,
            'hasRecruit' => false
        ]);

        HiredStudent::create([
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'name' => 'Indah Permata',
            'nis' => 123464,
            'place_birth' => 'Makassar',
            'date_birth' => '1998-09-09',
            'email' => 'indah@example.com',
            'school_origin' => 'SMA Negeri 9 Makassar',
            'major' => 'Teknik Mesin',
            'age' => 25,
            'height' => 160,
            'weight' => 50,
            'experience' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia itaque obcaecati debitis voluptates ducimus tenetur est alias voluptate facilis excepturi.',
            'role' => 'mechanic',
            'batch' => 1,
            'hasRecruit' => false
        ]);

        HiredStudent::create([
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'name' => 'Joko Susilo',
            'nis' => 123465,
            'place_birth' => 'Solo',
            'date_birth' => '2001-10-10',
            'email' => 'joko@example.com',
            'school_origin' => 'SMA Negeri 10 Solo',
            'major' => 'Teknik Elektro',
            'age' => 22,
            'height' => 168,
            'weight' => 58,
            'experience' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia itaque obcaecati debitis voluptates ducimus tenetur est alias voluptate facilis excepturi.',
            'role' => 'operator',
            'batch' => 1,
            'hasRecruit' => false
        ]);
    }
}
