<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemon')->insert([
            'name' => 'Bulbasaur',
            'imageURL' => '001.png',
            'number' => '#001',
            'type' => 'Grass|Poison',
            'rarity' => 'Common'
            ]);

        DB::table('pokemon')->insert([
            'name' => 'Ivysaur',
            'imageURL' => '002.png',
            'number' => '#002',
            'type' => 'Grass|Poison',
            'rarity' => 'Rare'
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Venusaur',
            'imageURL' => '003.png',
            'number' => '#003',
            'type' => 'Grass|Poison',
            'rarity' => 'Epic'
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Charmander',
            'imageURL' => '004.png',
            'number' => '#004',
            'type' => 'Fire',
            'rarity' => 'Common'
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Charmeleon',
            'imageURL' => '005.png',
            'number' => '#005',
            'type' => 'Fire',
            'rarity' => 'Rare'
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Charizard',
            'imageURL' => '006.png',
            'number' => '#006',
            'type' => 'Fire|Flying',
            'rarity' => 'Epic'
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Squirtle',
            'imageURL' => '007.png',
            'number' => '#007',
            'type' => 'Water',
            'rarity' => 'Common'
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Wartortle',
            'imageURL' => '008.png',
            'number' => '#008',
            'type' => 'Water',
            'rarity' => 'Rare'
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Blastoise',
            'imageURL' => '009.png',
            'number' => '#009',
            'type' => 'Water',
            'rarity' => 'Epic'
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Caterpie',
            'imageURL' => '010.png',
            'number' => '#010',
            'type' => 'Bug',
            'rarity' => 'Common'
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Metapod',
            'imageURL' => '011.png',
            'number' => '#011',
            'type' => 'Bug',
            'rarity' => 'Rare'
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Butterfree',
            'imageURL' => '012.png',
            'number' => '#012',
            'type' => 'Bug|Flying',
            'rarity' => 'Epic'
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Mew',
            'imageURL' => '151.png',
            'number' => '#151',
            'type' => 'Psychic',
            'rarity' => 'Legendary'
        ]);

    }
}
