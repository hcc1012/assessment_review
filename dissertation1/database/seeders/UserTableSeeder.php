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
                'name' => 'User1',
                'username' => 'user1',
                'email' => 'user1@aston.ac.uk',
                'password' => Hash::make('user1pw'), 
            ],

            [
                'name' => 'User2',
                'username' => 'user2',
                'email' => 'user2@aston.ac.uk',
                'password' => Hash::make('user2pw'), 
                
            ],

            [
                'name' => 'User3',
                'username' => 'user3',
                'email' => 'user3@aston.ac.uk',
                'password' => Hash::make('user3pw'), 
                
            ],

            [
                'name' => 'User4',
                'username' => 'user4',
                'email' => 'user4@aston.ac.uk',
                'password' => Hash::make('user4pw'), 
            ],

            [
                'name' => 'User5',
                'username' => 'user5',
                'email' => 'user5@aston.ac.uk',
                'password' => Hash::make('user5pw'), 
            ],



        ]);

        DB::table('role_user')->insert([
            ['userID' => 1, 'roleID' => 1],
        ]);
        
    }
}

