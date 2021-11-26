<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LoanTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id = User::where('role', 'siswa')->get('id')->random();
        $book_id = Book::all()->get('id');
        $faker = Faker::create('App\Book');
        
        
        DB::table('users')->insert([
        'user_id' => $user_id,
        'book_id' => $book_id,
        'tanggal_tenggat' => \Carbon\Carbon::now(),
        'tanggal_pengembalian' => \Carbon\Carbon::now(),
        'created_at' => \Carbon\Carbon::now(),
        'Updated_at' => \Carbon\Carbon::now(),
        ]);

        
    }
}
