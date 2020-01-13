<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name"       => "super-admin",
                "guard_name" => "web"
            ],
            [
                "name"       => "teacher",
                "guard_name" => "web"
            ],
            [
                "name"       => "student",
                "guard_name" => "web"
            ],
            [
                "name"       => "supervisor",
                "guard_name" => "web"
            ]
        ];

        Role::insert($data);
    }
}
