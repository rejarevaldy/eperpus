<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class Credential extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = Faker::create('App\User');
    DB::table('users')->insert([
      'nama' => 'Admin',
      'username' => 'admin',
      'password' => '$2y$10$9IqyR8x9oGcJvaCdZFZk0.RwgGcLwEX/cGPx6wxnyN0iXKvtvn0Ei',
      'nis' => $faker->regexify('[0-9]{8}'),
      'jurusan' => "RPL",
      'kelas' =>  '12',
      'gender' => "Pria",
      'agama' =>  "Islam",
      'role' => 'admin',
      'created_at' => \Carbon\Carbon::now(),
      'Updated_at' => \Carbon\Carbon::now(),
    ]);

    DB::table('users')->insert([
      'nama' => 'Siswa',
      'username' => 'siswa',
      'password' => '$2y$10$kbfL7Ucu0JTv19GdtZ64DexNvrkhdEXfdr48Dr5jP.KEww1P3Ym92',
      'nis' => $faker->regexify('[0-9]{8}'),
      'jurusan' => "RPL",
      'kelas' =>  '12',
      'gender' => "Pria",
      'agama' =>  "Islam",
      'role' => 'siswa',
      'created_at' => \Carbon\Carbon::now(),
      'Updated_at' => \Carbon\Carbon::now(),
    ]);
  }
}
