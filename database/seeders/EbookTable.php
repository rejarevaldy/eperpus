<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EbookTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Ebook');
        DB::table('ebooks')->insert([
        	'judul' => $faker->shuffle('judul-buku'),
        	'isbn' => $faker->regexify('[A-Z]{5}[0-4]{4}'),
        	'penulis' => $faker->name(),
        	'created_at' => \Carbon\Carbon::now(),
        	'Updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
