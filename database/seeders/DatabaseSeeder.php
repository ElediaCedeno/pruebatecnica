<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user= new User();
        $user->name='Eledia Cedeño';
        $user->email='maria@gmail.com';
        $user->password='Admin1234.';
        $user->celular=1726099417;
        $user->cedula=18997877887;
        $user->f_nacimiento='1996-10-27';
        $user->cod_ciudad='098987';
        $user->rol='admin';
        $user->save();
     
    }
}
