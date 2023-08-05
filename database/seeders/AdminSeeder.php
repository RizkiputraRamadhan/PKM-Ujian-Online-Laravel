<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin=[
            'name'=>'Admin',
            'email'=>'rizkiputra@gmail.com',
            'password'=>bcrypt('team kuli IT'),
        ];

        Admin::create($admin);
    }
}
