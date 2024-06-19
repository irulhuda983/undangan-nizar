<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'nama' => 'superadmin',
            'username' => 'sudo',
            'password' => Hash::make('Lalisandi12'),
        ]);

        UserRole::create([
            'user_id' => $user->id,
            'role_id' => 1,
        ]);
    }
}
