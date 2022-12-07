<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Reset the admins table
         */
        if (App::environment() == 'local') {
            DB::table('admins')->truncate();
        }

        DB::table('admins')->insert([
            'first_name' => 'Super',
            'last_name'  => 'Admin',
            'phone'      => '123456789',
            'email'      => 'admin@anmol.com',
            'password'   => bcrypt('admin123'),
            'status'  => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}