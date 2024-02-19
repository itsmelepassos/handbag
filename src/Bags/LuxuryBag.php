<?php

namespace ItsMeLePassos\HandBag\Bags;
use ItsMeLePassos\HandBag\Bag;

class LuxuryBag extends Bag
{
    private string $particularities;

    public function setParticularities(string $particularities): void
    {
        $this->particularities = $particularities;
    }

    public function getParticularities(): string
    {
        $part = "<h2>Particularidades</h2>";
        $part .= "<p>{$this->particularities}</p>";

        return $part;
    }
}