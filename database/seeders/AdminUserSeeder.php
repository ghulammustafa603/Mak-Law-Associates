<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Mukhtar Ahmed Kobhar',
            'email' => 'mukhtarahmed.lawassociates@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        $this->command->info('Admin user created successfully!');
        $this->command->info('Email: mukhtarahmed.lawassociates@gmail.com');
        $this->command->info('Password: admin123');
    }
}
