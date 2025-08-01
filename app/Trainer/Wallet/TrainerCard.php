<?php

namespace Pokefodase\Trainer;

final class TrainerCard
{
    public function __construct(
        public  $money,
        public array $badges,
    ) {
        $this->badges = array_map(
        fn ($badge) => Badge::Earth,
        $this->badges,
        );
    }
}
