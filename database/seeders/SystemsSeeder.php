<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SystemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('systems')->insert([
            'name' => 'Dungeons & Dragons 5E',
            'shortname' => 'D&D 5E',
            'alternative_names' => 'Fifth Edition, 5E, DnD',
            'description' => 'Drawing on over forty years of history, Dungeons & Dragons lets you create mighty heroes to battle monsters, solve puzzles, and reap rewards.'
        ]);
        DB::table('systems')->insert([
            'name' => 'Pathfinder 2E',
            'shortname' => 'PF2',
            'alternative_names' => 'Pathfinder',
            'description' => ''
        ]);
        DB::table('systems')->insert([
            'name' => 'Call of Cthulhu',
            'shortname' => 'CoC',
            'alternative_names' => 'Trail of Cthulhu, Delta Green, Achtung! Cthulhu',
            'description' => ''
        ]);

        DB::table('systems')->insert([
            'name' => 'Star Wars',
            'shortname' => 'Star Wars',
            'alternative_names' => 'Edge of the Empire, Force & Destiny, Age of Rebllion, FFG Star Wars',
            'description' => ''
        ]);

        DB::table('systems')->insert([
            'name' => 'World of Darkness',
            'shortname' => 'WoD',
            'alternative_names' => 'Vampire, Werewolf',
            'description' => ''
        ]);

        DB::table('systems')->insert([
            'name' => 'Warhammer : Fantasy Roleplay',
            'shortname' => 'WHFRP',
            'alternative_names' => 'Warhammer, Small But Vicious RPG',
            'description' => ''
        ]);

        DB::table('systems')->insert([
            'name' => 'Shadowrun',
            'shortname' => 'SR',
            'alternative_names' => '',
            'description' => ''
        ]);

        DB::table('systems')->insert([
            'name' => 'Starfinder',
            'shortname' => 'SF',
            'alternative_names' => '',
            'description' => ''
        ]);

        DB::table('systems')->insert([
            'name' => 'Cypher System',
            'shortname' => 'Cypher',
            'alternative_names' => 'Numenara, Gods & Mortals, Invisible Sun, The Strange, The Stars Are Fire',
            'description' => ''
        ]);

        DB::table('systems')->insert([
            'name' => 'Savage Worlds',
            'shortname' => 'SW',
            'alternative_names' => 'Deadlands, ',
            'description' => ''
        ]);

        DB::table('systems')->insert([
            'name' => '',
            'shortname' => '',
            'alternative_names' => '',
            'description' => ''
        ]);

    }
}
