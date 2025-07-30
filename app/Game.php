<?php

namespace Pokefodase;

use Pokefodase\Trainer\Trainer;

final class Game
{
    public function run()
    {
        $trainer = [
            'id' => 87654321,
            'name' => 'Ash Ketchum',
            'money' => 1000,
            'badges' => [
                'Boulder Badge',
                'Cascade Badge',
                'Thunder Badge',
                'Rainbow Badge',
                'Soul Badge',
                'Marsh Badge',
                'Volcano Badge',
                'Earth Badge',
            ],
            'pokemons' => [
                [
                    'name' => 'Cavalo',
                    'species' => 'Rapidash',
                    'level' => 35,
                    'type' => 'Fire',
                ],
                [
                    'name' => 'Pikachu',
                    'species' => 'Pikachu',
                    'level' => 25,
                    'type' => 'Electric',
                ],
                [
                    'name' => 'Bulbasaur',
                    'species' => 'Bulbasaur',
                    'level' => 20,
                    'type' => 'Grass/Poison',
                ],
            ],
            'current_map' => 'Pallet Town',
            'active_pokemon' => 0,
        ];

        $renanzinTrainer = new Trainer(
            $trainer['id'],
            $trainer['name'],
            $trainer['money'],
            $trainer['badges'],
            $trainer['pokemons'],
            $trainer['current_map'],
            $trainer['active_pokemon']
        );
    }
}
