<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory\ as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
            after making this class run : [composer dump-autoload] in your command line
            after that to seed the data [php artisan bd:seed]
            to fresh datable and again seed [php artisan migrate:fresh --seed]
        */
        DB::table('posts')->insert([
            'title' => 'This is the title',
            'description' => 'This is the description of the table',
        ]);//use for cusomise seeding data
        
        $faker = Faker::create();
        foreach(range(1, 20) as $index){
            DB::table('posts')->insert([
                'title' => $faker->sentence(5),
                'description' => $faker->paragraph(4);
            ]);//use for fake seeding data
        }
    }
}
