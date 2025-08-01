<?php

namespace Pokefodase\Trainer;

final class Trainer
{
    public function __construct(
        public int $identifier,
        public string $name,
        public TrainerCard $trainerCard,
        public array $pokemons,
        public string $currentMap,
        public int $activePokemon
    ) {
        $this->pokemons = array_map(function ($pokemon) {
            return new \Pokefodase\Pokemon\Pokemon(
                $pokemon['id'],
                $pokemon['name'],
                $pokemon['species'],
                $pokemon['level'],
                $pokemon['type']
            );
        }, $this->pokemons);
    }
}
