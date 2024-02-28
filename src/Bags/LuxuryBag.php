<?php

namespace ItsMeLePassos\HandBag\Bags;

use ItsMeLePassos\HandBag\Bag;
use ItsMeLePassos\HandBag\WearBag;

/**
 * 
 * @package ItsMeLePassos\HandBag\Bags
 */
class LuxuryBag extends Bag implements WearBag
{
    private string $particularities;

    /**
     * Sets the particularities of the bag
     *
     * @param string $particularities The particularities of the bag
     * @return void
     */
    public function setParticularities(string $particularities): void
    {
        $this->particularities = $particularities;
    }

    /**
     * Returns the particularities of the bag as HTML
     *
     * @return string
     */
    public function getParticularities(): string
    {
        $part = "<h2>Particularidades</h2>";
        $part .= "<p>{$this->particularities}</p>";

        return $part;
    }

    /**
     * Returns a message indicating that the bag is being worn
     *
     * @return string
     */
    public function wearBag(): string
    {
        return "É um luuuuuuuxo!";
    }
}
