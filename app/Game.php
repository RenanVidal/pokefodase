<?php

namespace Pokefodase;

use Pokefodase\Trainer\Trainer;
use Pokefodase\Trainer\TrainerCard;
use Pokefodase\Trainer\Wallet\Money;

final class Game
{
    public function run()
    {
        $trainer = [
            'id' => 87654321,
            'name' => 'Ash Ketchum',
            'trainerCard' =>  new TrainerCard(
                new Money(1000),
                badges: [
                    'Boulder',
                    'Cascade',
                    'Thunder',
                ]
            ),
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
            $trainer['trainerCard'],
            $trainer['pokemons'],
            $trainer['current_map'],
            $trainer['active_pokemon']
        );

        echo ' game started'.PHP_EOL;
        echo 'Trainer: '.$renanzinTrainer->identifier.PHP_EOL;
        var_dump($renanzinTrainer);
    }
}
