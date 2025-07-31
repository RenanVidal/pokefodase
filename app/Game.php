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
                    'id'=> uniqid(time()),
                    'name' => 'Cavalo',
                    'species' => 'Rapidash',
                    'level' => 35,
                    'type' => 'Fire',
                ],
                [
                    'id'=> uniqid(time()),
                    'name' => 'Pikachu',
                    'species' => 'Pikachu',
                    'level' => 25,
                    'type' => 'Electric',
                ],
                [
                    'id'=> uniqid(time()),
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

        echo ' game started'.PHP_EOL;
        echo 'Trainer: '.$renanzinTrainer->identifier.PHP_EOL;
        var_dump($renanzinTrainer);
    }
}
