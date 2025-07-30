<?php

namespace Pokefodase\Trainer;

final class Trainer
{
    public function __construct(
        public int $identifier,
        public string $name,
        public int $money,
        public array $badges,
        public array $pokemons,
        public string $currentMap,
        public int $activePokemon
    ) {
    }
}
