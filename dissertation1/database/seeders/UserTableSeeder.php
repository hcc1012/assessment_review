<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Import Hash facade

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     
    
    public function run(): void {


     DB::table('roles')->insert([
        ['role_name' => 'system admin'],
        ['role_name' => 'assessor'],
        ['role_name' => 'internal moderator'],
        ['role_name' => 'external examiner'],
        ['role_name' => 'programme director'],
        ['role_name' => 'user'],
    ]);
        DB::table('users')->insert([
            
            //admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@aston.ac.uk',
                'password' => Hash::make('adminpw'), 
            ],

            

            [
                'name' => 'Joe',
                'username' => 'yuenj',
                'email' => 'joe@aston.ac.uk',
                'password' => Hash::make('yuenjpw'), 
            ],

            [
                'name' => 'Sylvia',
                'username' => 'wongs',
                'email' => 'sylvia@aston.ac.uk',
                'password' => Hash::make('wongspw'), 
                
            ],

            [
                'name' => 'Nick',
                'username' => 'nickp',
                'email' => 'nick@aston.ac.uk',
                'password' => Hash::make('nickppw'), 
                
            ],

            [
                'name' => 'Hai',
                'username' => 'haiw',
                'email' => 'hai@aston.ac.uk',
                'password' => Hash::make('haiwpw'), 
            ],

            [
                'name' => 'Alexandros',
                'username' => 'alexandros',
                'email' => 'alexandros@aston.ac.uk',
                'password' => Hash::make('alexpw'), 
            ],



        ]);

        DB::table('role_user')->insert([
            ['userID' => 1, 'roleID' => 1],
        ]);
        DB::table('role_user')->insert([
            ['userID' => 2, 'roleID' => 2],
        ]);


    }
}

