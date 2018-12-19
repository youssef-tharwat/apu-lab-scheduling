<?php

use Illuminate\Database\Seeder;
use App\Resources;
use Illuminate\Support\Facades\DB;

class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Lab 1',
                'eventColor' => 'green',
            ],
            [
                'title' => 'Lab 2',
                'eventColor' => 'blue',
            ],
            [
                'title' => 'Lab 3',
                'eventColor' => 'red',
            ],
            [
                'title' => 'Lab 4',
                'eventColor' => 'purple',
            ],
            [
                'tile' => 'Lab 5',
                'eventColor' => 'yellow',
            ],
            [
                'title' => 'Lab 6',
                'eventColor' => 'orange',
            ],
        ];

        DB::table('resources')->insert($data);
    }
}
