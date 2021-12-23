<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
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
            'display_name' => 'User Administrator',
        ]);

        $pengguna = Role::create([
            'name' => 'pengguna',
            'display_name' => 'User Biasa',

        ]);

        $user = new User();
        $user->name = 'indriwld';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

        $pengunjung = new User();
        $pengunjung->name = 'pengunjung';
        $pengunjung->email = 'pengunjung@gmail.com';
        $pengunjung->password = Hash::make('12345678');
        $pengunjung->save();

        $user->attachRole($admin);
        $pengunjung->attachRole($pengguna);

    }
}
