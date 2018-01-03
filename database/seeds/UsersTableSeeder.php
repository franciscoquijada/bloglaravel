<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => "Francisco Quijada",
                'email' => "francisco_quijada@outlook.com",
                'password' => bcrypt('clavesecreta')
            ],
            [
                'name' => "Francisco Fuenmayor",
                'email' => "francisco_fuenmayor@outlook.com",
                'password' => bcrypt('clavesecreta')
            ],
            [
                'name' => "Francisco Medrano",
                'email' => "francisco_medrano@outlook.com",
                'password' => bcrypt('clavesecreta')
            ],
        ]);
    }
}
