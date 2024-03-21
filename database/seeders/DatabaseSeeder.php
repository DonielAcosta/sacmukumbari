<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Categoria;

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
        $user = new User;
        $user->name ='Admin';
        $user->last_name ='sistema';
        $user->cedula ='12345';
        $user->email= 'admin@gmail.com';
        $user->password ='123456789';
        $user->role ='admin';
        
        $user->save();

         // Crear 5 categorías
         for ($i = 1; $i <= 6; $i++) {
            $cate = new Categoria;
            $cate->name ='unidad' . $i;
            $cate->save();
        }
    }

    // public function createAdmin(){
    //     $user = new User;
    //      $user->name ='Admin';
    //      $user->last_name ='sistema';
    //      $user->cedula ='12345';
    //      $user->email= 'admin@gmail.com';
    //      $user->password =bcrypt('123456789');
    // }
}
