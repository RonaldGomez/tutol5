<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name' => 'Julio',
            'email' => 'ficticio@vallenova.pe',
            'role' => 'admin',
            'password' => 'ficticio'
            ]);
        factory(App\User::class, 49)->create();
    }
}
