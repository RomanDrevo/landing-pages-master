<?php

use Illuminate\Database\Seeder;

class BrokerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brokers')->insert([
            'name' => 'Ivory Option',
            'platform' => 'spot',
            'logo_url' => 'ivory_logo_w_480x110.png'
        ]);

        DB::table('brokers')->insert([
            'name' => '72 Option',
            'platform' => 'spot',
            'logo_url' => '72options_358x110.png'
        ]);

        DB::table('brokers')->insert([
            'name' => 'Roiteks',
            'platform' => 'panda',
            'logo_url' => 'roiteks_logo_w_480x110.png'
        ]);
    }
}
