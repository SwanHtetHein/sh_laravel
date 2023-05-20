<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->truncate();
        $contacts= [];
        $Faker = Faker::create();
        foreach(range(1,10) as $index){
            $contacts[]=[
               'first_name'=> $Faker->firstname(),               
               'last_name'=> $Faker->lastname(),
               'address'=> $Faker->address(),
               'email'=> $Faker->email(),
               'company_id'=> $index,
               'country_id'=> 1,
               'created_at'=> now(),
               'updated_at'=> now(),
                
            ];
        }
    DB::table('contacts')->insert($contacts); 
    }
}
