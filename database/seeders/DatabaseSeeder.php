<?php

namespace Database\Seeders;

use Database\Seeders\BookTable;
use Database\Seeders\UserTable;
use Illuminate\Database\Seeder;
use Database\Seeders\EbookTable;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BookTable::class,
            UserTable::class,
            EbookTable::class
        ]);
    }
}
