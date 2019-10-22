<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            DB::table('roles')->insert([
            'rol' =>'ADMIN',
        ]);
            DB::table('roles')->insert([
            'rol' =>'USER',
        ]);
    }
}
