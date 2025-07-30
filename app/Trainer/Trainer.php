<?php

namespace Pokefodase\Trainer;

final class Trainer
{
    public function __construct()
    {
    }

    public function inventory(): array
    {
        return [
            'Pokeballs' => 10,
            'Potions' => 5,
            'Revives' => 2,
        ];
    }

    public function getPokemon(): array
    {
        return ['Pikachu', 'Charizard', 'Bulbasaur'];
    }

    public function getActivePokemon(): string
    {
        return $this->getPokemon()[0];
    }

    public function train()
    {
        return 'Trainer is training';
    }

    public function battle()
    {
        return 'Trainer is battling';
    }

    public function catchPokemon()
    {
        return 'Trainer is catching a Pokemon';
    }
}
