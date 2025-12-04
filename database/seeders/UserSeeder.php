<?php

namespace Database\Seeders;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
           
       //Se não encontrar o registo com o e-mail, regista o registo na BD
       User::firstOrCreate(
        ['email'=>'gilson20pc@gmail.com'],
        ['name'=>'gilson', 
         'email'=>'gilson20pc@gmail.com',
         'password'=> Hash::make('123456')],
       );
       User::firstOrCreate(
        ['email'=>'rafael20pc@gmail.com'],
        ['name'=>'rafael', 
         'email'=>'rafael20pc@gmail.com', 
         'password'=> Hash::make('123456')],
       );
       User::firstOrCreate(
        ['email'=>'rodrigo20pc@gmail.com'],
        ['name'=>'rodrigo', 
         'email'=>'rodrigo20pc@gmail.com', 
         'password'=> Hash::make('123456')],
       );
        User::firstOrCreate(
        ['email'=>'tereza20pc@gmail.com'],
        ['name'=>'tereza', 
         'email'=>'tereza20pc@gmail.com', 
         'password'=> Hash::make('123456')],
       );


            
        } catch (Exception $e) {
           
            Log::notice('Utilizador não registado!', ['error'=> $e -> getMessage()]);
        }
    }
}
