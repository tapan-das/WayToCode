<?php
use Illuminate\Support\facades\DB;
use Illuminate\Support\facades\Hash;
use Illuminate\Database\Seeder;

class TapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tapans')->insert([
            'name' => 'Prabhati Das',
            'email' => 'tapandas743383@gmail.com',
            'password' => Hash::make('Waytocode@143'),
        ]);
    }
}
