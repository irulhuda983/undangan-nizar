<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Template;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama' => 'template 1', 'kode' => 'template1', 'filename' => 'template1'],
            ['nama' => 'template 2', 'kode' => 'template2', 'filename' => 'template2'],
            ['nama' => 'template 3', 'kode' => 'template3', 'filename' => 'template2'],
        ];

        foreach($data as $item) {
            Template::create([
                'nama' => $item['nama'],
                'kode' => $item['kode'],
                'filename' => $item['filename'],
            ]);
        }
    }
}
