<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Balance;
use App\Models\BackLink;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Mohamed Osama',
            'email' => 'mosama88@hotmail.com',
            'password' => Hash::make('password'),
            'mobile' => '01228759920',
        ]);


        Admin::create([
            'name' => 'Mohamed Osama',
            'username' => 'mosama',
            'password' => Hash::make('password'),
            'mobile' => '01550565699',
        ]);

        Admin::factory(100)->create();
        User::factory(100)->create();
        Balance::factory(100)->create();
        BackLink::factory(1000)->create();
    }
}