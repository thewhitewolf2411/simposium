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

        DB::table('sponsors')->insert([

            'sponsor_name'=>'Roche',
            'sponsor_logo'=>'/images/spon/plat/Roche_white-h200.png',
            'sponsor_contact_email'=>'haris.muslic@purplematrix.co.uk',
            'booth_path'=>'/canvas/roche/roche.html'

        ]);

        DB::table('sponsors')->insert([

            'sponsor_name'=>'Novartis',
            'sponsor_logo'=>'/images/spon/plat/Novartis-white-h200.png',
            'sponsor_contact_email'=>'haris.muslic@purplematrix.co.uk',
            'booth_path'=>'/canvas/novartis/novartis.html'

        ]);

        DB::table('sponsors')->insert([

            'sponsor_name'=>'Genzyme',
            'sponsor_logo'=>'/images/spon/gold/sanofi-white-h200.png',
            'sponsor_contact_email'=>'haris.muslic@purplematrix.co.uk',
            'booth_path'=>'/canvas/genzime/genzyme.html'

        ]);


        DB::table('sponsors')->insert([

            'sponsor_name'=>'Astellas',
            'sponsor_logo'=>'/images/spon/silv/astellas-white-h200.png',
            'sponsor_contact_email'=>'haris.muslic@purplematrix.co.uk',
            'booth_path'=>'/canvas/astellas/astellas_booth.html'

        ]);

        DB::table('sponsors')->insert([

            'sponsor_name'=>'Takeda',
            'sponsor_logo'=>'/images/spon/silv/Takeda-white-h200.png',
            'sponsor_contact_email'=>'haris.muslic@purplematrix.co.uk',
            'booth_path'=>'/canvas/takeda/takeda.html'

        ]);

        DB::table('sponsors')->insert([

            'sponsor_name'=>'Zentiva',
            'sponsor_logo'=>'/images/spon/rest/ZENTIVA-white-h200.png',
            'sponsor_contact_email'=>'haris.muslic@purplematrix.co.uk',
            'booth_path'=>'/canvas/zentiva/zentiva.html'

        ]);

        DB::table('sponsors')->insert([

            'sponsor_name'=>'El Pharma',
            'sponsor_logo'=>'/images/spon/rest/elpharama-white-h200.png',
            'sponsor_contact_email'=>'haris.muslic@purplematrix.co.uk',
            'booth_path'=>'/canvas/elpharma/elpharma.html'

        ]);


        DB::table('sponsors')->insert([

            'sponsor_name'=>'Pliva',
            'sponsor_logo'=>'/images/spon/rest/Pliva-white-h200.png',
            'sponsor_contact_email'=>'haris.muslic@purplematrix.co.uk',
            'booth_path'=>'/canvas/pliva/pliva.html'

        ]);


    }
}
