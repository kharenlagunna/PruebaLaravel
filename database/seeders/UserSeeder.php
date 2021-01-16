<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Foundation\Inspiring; // Libreria para encriptar la contraseña 

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
                    'accessKey'=>bcrypt('1423'),
                    'name'=>'Karen',
                    'last_name'=>'Laguna',
                    'phone'=>'122334',
                    'identification_number'=>'12315415',
                    'birth_date'=>'1995-04-29',
                    'idroles'=>1]);

                    
        
    }
}

