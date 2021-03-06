<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Foundation\Inspiring; // Libreria para encriptar la contraseña 
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
        //Creación del usuario administrador con seed de Laravel
        
        User::create(['email'=>'karen@gmail.com',
                    'password'=> Hash::make('1423'),
                    'name'=>'Karen',
                    'last_name'=>'Laguna',
                    'phone'=>'122334',
                    'identification_number'=>'12315415',
                    'birth_date'=>'1995-04-29',
                    'idroles'=>1]);

                    User::create(['email'=>'user@gmail.com',
                    'password'=> Hash::make('123'),
                    'name'=>'Liseth',
                    'last_name'=>'Laguna',
                    'phone'=>'122334',
                    'identification_number'=>'1231111115415',
                    'birth_date'=>'1995-04-29',
                    'idroles'=>2]);

                    
        
    }
}

