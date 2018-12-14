<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'admin',
            'description' => 'Full access'
        ]);

        $student = Role::create([
            'name' => 'student',
            'display_name' => 'student',
            'description' => 'specific access'
        ]);

        $lecturer = Role::create([
            'name' => 'lecturer',
            'display_name' => 'lecturer',
            'description' => 'specific access'
        ]);
    }

}
