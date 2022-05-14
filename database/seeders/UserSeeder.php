<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      //  $role = Role::create(['name' => 'productor']);
        //$role = Role::create(['name' => 'admin']);

     //admin
         User::create([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('87654321')
         ])->assignRole('admin');

    /*
         //empresa 1
        User::create([
            'name' => 'productor1',
            'email' => 'productor1@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('productor');

        //empresa2 
        User::create([
            'name' => 'productor2',
            'email' => 'productor2@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('productor');

        //empresa3 
        User::create([
            'name' => 'productor3',
            'email' => 'productor3@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('productor');

        //empresa4 
        User::create([
            'name' => 'productor4',
            'email' => 'productor4@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('productor');

        //empresa5 
        User::create([
            'name' => 'productor5',
            'email' => 'productor5@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('productor');

        //empresa6 
        User::create([
            'name' => 'productor6',
            'email' => 'productor6@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('productor');

        //empresa7 
        User::create([
            'name' => 'productor7',
            'email' => 'productor7@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('productor');

         //empresa8 
         User::create([
            'name' => 'productor8',
            'email' => 'productor8@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('productor');

         //empresa9 
         User::create([
            'name' => 'productor9',
            'email' => 'productor9@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('productor');

         //empresa10 
         User::create([
            'name' => 'productor10',
            'email' => 'productor10@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('productor');
        //invitado
*/    

        //User::factory(100)->create();
    }
}
