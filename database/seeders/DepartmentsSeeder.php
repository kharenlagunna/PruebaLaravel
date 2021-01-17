<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\Department;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            Department::create(['code' => '1', 'description' => 'N/A', 'country_id' => 44, 'deleted_at' => date('Y-m-d H:i:s')]);
            Department::create(['code' => '91', 'description' => 'AMAZONAS', 'country_id' => 44]);
            Department::create(['code' => '5', 'description' => 'ANTIOQUIA', 'country_id' => 44]);
            Department::create(['code' => '81', 'description' => 'ARAUCA', 'country_id' => 44]);
            Department::create(['code' => '8', 'description' => 'ATLANTICO', 'country_id' => 44]);
            Department::create(['code' => '11', 'description' => 'BOGOTA, D.C.', 'country_id' => 44]);
            Department::create(['code' => '13', 'description' => 'BOLIVAR', 'country_id' => 44]);
            Department::create(['code' => '15', 'description' => 'BOYACA', 'country_id' => 44]);
            Department::create(['code' => '17', 'description' => 'CALDAS', 'country_id' => 44]);
            Department::create(['code' => '18', 'description' => 'CAQUETA', 'country_id' => 44]);
            Department::create(['code' => '85', 'description' => 'CASANARE', 'country_id' =>44]);
            Department::create(['code' => '19', 'description' => 'CAUCA', 'country_id' => 44]);
            Department::create(['code' => '20', 'description' => 'CESAR', 'country_id' => 44]);
            Department::create(['code' => '27', 'description' => 'CHOCO', 'country_id' => 44]);
            Department::create(['code' => '23', 'description' => 'CORDOBA', 'country_id' => 44]);
            Department::create(['code' => '25', 'description' => 'CUNDINAMARCA', 'country_id' => 44]);
            Department::create(['code' => '94', 'description' => 'GUAINIA', 'country_id' => 44]);
            Department::create(['code' => '44', 'description' => 'LA GUAJIRA', 'country_id' => 44]);
            Department::create(['code' => '95', 'description' => 'GUAVIARE', 'country_id' => 44]);
            Department::create(['code' => '41', 'description' => 'HUILA', 'country_id' => 44]);
            Department::create(['code' => '47', 'description' => 'MAGDALENA', 'country_id' => 44]);
            Department::create(['code' => '50', 'description' => 'META', 'country_id' => 44]);
            Department::create(['code' => '52', 'description' => 'NARIÑO', 'country_id' => 44]);
            Department::create(['code' => '54', 'description' => 'NORTE DE SANTANDER', 'country_id' => 44]);
            Department::create(['code' => '86', 'description' => 'PUTUMAYO', 'country_id' => 44]);
            Department::create(['code' => '63', 'description' => 'QUINDIO', 'country_id' => 44]);
            Department::create(['code' => '66', 'description' => 'RISARALDA', 'country_id' => 44]);
            Department::create(['code' => '88', 'description' => 'SAN ANDRES', 'country_id' => 44]);
            Department::create(['code' => '68', 'description' => 'SANTANDER', 'country_id' => 44]);
            Department::create(['code' => '70', 'description' => 'SUCRE', 'country_id' => 44]);
            Department::create(['code' => '73', 'description' => 'TOLIMA', 'country_id' => 44]);
            Department::create(['code' => '97', 'description' => 'VAUPES', 'country_id' => 44]);
            Department::create(['code' => '76', 'description' => 'VALLE DEL CAUCA', 'country_id' => 44]);
            Department::create(['code' => '99', 'description' => 'VICHADA', 'country_id' => 44]);
    
        
    }
}
