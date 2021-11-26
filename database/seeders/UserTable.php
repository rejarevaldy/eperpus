<?php

namespace Database\Seeders;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Book');
            DB::table('users')->insert([
                'nama' => $faker->name(),
                'username' => $faker->username(),
                'password' => '$2y$10$o7z2lNPQyqS9Wk4ZOSWPvuD4DD2bnGEuVotGIM.QvXzY0fOJN3WEi',
                'nis' => $faker->regexify('[0-9]{8}'),
                'jurusan' => "MM",
                'kelas' =>  '12',
                'gender' => "Pria",
                'agama' =>  "Islam",
                'role' => 'siswa',
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        
    }
}
