<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title'=>'Finacial forum', 'resource_id' => 1 , 'user_id' => 1, 'start_date'=>'2018-12-17 07:00:00', 'end_date'=>'2018-12-17 07:00:00'],
            ['title'=>'Devtalk', 'resource_id' => 2 , 'user_id' => 1, 'start_date'=>'2018-12-17 07:00:00', 'end_date'=>'2018-12-17 07:00:00'],
            ['title'=>'Super Event', 'resource_id' => 3 , 'user_id' => 1, 'start_date'=>'2018-12-17 07:00:00', 'end_date'=>'2018-12-17 07:00:00'],
            ['title'=>'wtf event', 'resource_id' => 4 ,  'user_id' => 1, 'start_date'=>'2018-12-17 07:00:00', 'end_date'=>'2018-12-17 07:00:00'],
        ];
        DB::table('events')->insert($data);
    }
}
