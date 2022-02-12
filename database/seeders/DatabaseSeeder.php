<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\BarangSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\GambarSeeder;
use Database\Seeders\UsersSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            BarangSeeder::class,
            CategorySeeder::class,
            GambarSeeder::class,
            UsersSeeder::class
            // PermissionTableSeeder::class,
        ]);
    }
}
