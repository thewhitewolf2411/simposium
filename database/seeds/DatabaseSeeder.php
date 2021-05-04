<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([

            'name'=>'Haris',
            'lastname'=>'Muslić',
            'email'=>'haris.muslic@purplematrix.co.uk',
            'email_verified_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'password'=>Hash::make('Lambda12'),
            'institution'=>'Purple Key',
            'profession'=>'Software Developer',
            'level'=>3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('users')->insert([
            'name'=>'Djordje',
            'lastname'=>'Jovanovic',
            'email'=>'djordje@purplekeyagency.co.uk',
            'email_verified_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'password'=>Hash::make('Matrix2020!!'),
            'institution'=>'Purple Key',
            'profession'=>'Creative Director',
            'level'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('users')->insert([
            'name'=>'Ken',
            'lastname'=>'Kaneki',
            'email'=>'kenkaneki@purplekeyagency.co.uk',
            'email_verified_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'password'=>Hash::make('Lambda12'),
            'institution'=>'Purple Key',
            'profession'=>'Ghoul',
            'level'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
