<?php

namespace Pokefodase\Pokemon;

final class Pokemon
{
    public function __construct(
        public string $id,
        public string $name,
        public string $species,
        public int $level,
        public string $type
    ) {
    }
}
