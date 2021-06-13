<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TimeslotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('timeslots')->insert([
            'start' => '2022-03-25 09:00:00',
            'end'   => '2022-03-25 09:50:00',
            'day'   => '1'
        ]);
        DB::table('timeslots')->insert([
            'start' => '2022-03-25 10:00:00',
            'end'   => '2022-03-25 10:50:00',
            'day'   => '1'
        ]);
        DB::table('timeslots')->insert([
            'start' => '2022-03-25 11:00:00',
            'end'   => '2022-03-25 11:50:00',
            'day'   => '1'
        ]);
        DB::table('timeslots')->insert([
            'start' => '2022-03-25 12:00:00',
            'end'   => '2022-03-25 12:50:00',
            'day'   => '1'
        ]);
        DB::table('timeslots')->insert([
            'start' => '2022-03-25 13:00:00',
            'end'   => '2022-03-25 13:50:00',
            'day'   => '1'
        ]);
        DB::table('timeslots')->insert([
            'start' => '2022-03-25 14:00:00',
            'end'   => '2022-03-25 14:50:00',
            'day'   => '1'
        ]);
        DB::table('timeslots')->insert([
            'start' => '2022-03-25 15:00:00',
            'end'   => '2022-03-25 15:50:00',
            'day'   => '1'
        ]);
        DB::table('timeslots')->insert([
            'start' => '2022-03-25 16:00:00',
            'end'   => '2022-03-25 16:50:00',
            'day'   => '1'
        ]);
        DB::table('timeslots')->insert([
            'start' => '2022-03-25 17:00:00',
            'end'   => '2022-03-25 17:50:00',
            'day'   => '1'
        ]);
        DB::table('timeslots')->insert([
            'start' => '2022-03-25 18:00:00',
            'end'   => '2022-03-25 18:50:00',
            'day'   => '1'
        ]);
        DB::table('timeslots')->insert([
            'start' => '2022-03-25 19:00:00',
            'end'   => '2022-03-25 19:50:00',
            'day'   => '1'
        ]);
        DB::table('timeslots')->insert([
            'start' => '2022-03-25 20:00:00',
            'end'   => '2022-03-25 20:50:00',
            'day'   => '1'
        ]);

    }
}
