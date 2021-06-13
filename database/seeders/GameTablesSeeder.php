<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GameTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gametables')->insert([
            'name' => 'Manticore',
            'directions' => 'From the street entrance of the convention centre, head up the steps to Level 2. Defeat the traps and arrive at the Metchosin room, Manticore is on the far side of the room.',
            'room' => 'Metchosin'
        ]);

        DB::table('gametables')->insert([
            'name' => 'Mimic',
            'directions' => 'From the street entrance of the convention centre, head up the steps to Level 2. Defeat the traps and arrive at the Metchosin room, Mimic is in the middle of the room.',
            'room' => 'Metchosin'
        ]);
        DB::table('gametables')->insert([
        'name' => 'Myconid',
        'directions' => 'From the street entrance of the convention centre, head up the steps to Level 2. Defeat the traps and arrive at the Metchosin room, Myconid is nearest the door.',
        'room' => 'Metchosin'
        ]);
        DB::table('gametables')->insert([
            'name' => 'Chimera',
            'directions' => 'From the street entrance of the convention centre, head up the steps to Level 2. Defeat the traps and arrive at the Colwood room. Chimera is on the left, furthest from the door.',
            'room' => 'Colwood'
            ]);
    }
}

/* TABLE NAME POOL
Each table should have a name that is alliterative with the room name. Each name should be a single world.

Saanich (which is alphabetized as "A" because of the collision with Sidney)
- Aarakocra
- Ankheg
- Aboleth
- Acererak

Colwood
- Centaur
- Cambion
- Chasme
- Chimera
- Choker
- Cloaker
- Cockatrice

Equimalt
- Efreeti
- Erinyes
- Ettercap

Metchosin
- Manticore
- Mimic
- Mephit 
- Magmin
- Myconid
- Minotaur
- Marilith

Oak Bay
- Ogre
- Owlbear
- Otyugh
- Orc
- Orcus

Sidney
- Sahuagin
- Spectator
- Succubus
- Siren
- Strahd