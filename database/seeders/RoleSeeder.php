<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama' => 'admin'],
            ['nama' => 'dosen'],
            ['nama' => 'mahasiswa'],
        ];

        foreach ($data as $d) {
            Role::create($d);
        }
    }
}
