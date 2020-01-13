<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Super Admin',
            'email' => 'admin@vidyasathionline.com',
            'password' => bcrypt('secret')
        ];

        $user = User::create($data);

        $user->assignRole("super-admin");
    }
}
