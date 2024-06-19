<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama' => 'superadmin'],
            ['nama' => 'admin'],
            ['nama' => 'customer'],
        ];

        foreach($data as $item) {
            Role::create([
                'nama' => $item['nama'],
            ]);
        }
    }
}
