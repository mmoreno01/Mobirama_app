<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(ServiciosTableSeeder::class);
        $this->call(SintomasSeeder::class);

    }
    
    protected function truncateTables(array $tables)
        {
            foreach($tables as $table){
                DB::table($table)->truncate();
            }
        }
}

