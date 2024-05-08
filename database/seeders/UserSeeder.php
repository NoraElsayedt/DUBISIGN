<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;





class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */



    //   One Running command to start the application. => php artisan serve
    // To Running JOB Update UpdateStatistics =>php artisan queue:work


    public function run(): void
    {

        DB::table('users')->delete();
        
        User::factory()->count(1000)->create();



     
    }
}
