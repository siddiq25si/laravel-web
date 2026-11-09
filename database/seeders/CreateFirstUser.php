<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // Import Model User
use Illuminate\Support\Facades\Hash; // Import Package Hash

class CreateFirstUser extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'gatot@pcr.ac.id',
            'password' => Hash::make('gatotkaca')
        ]);
    }
}
