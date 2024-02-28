<?php

namespace ItsMeLePassos\HandBag\Bags;

use ItsMeLePassos\HandBag\Bag;
use ItsMeLePassos\HandBag\WearBag;
use Override;

class SportsBag extends Bag implements WearBag
{
    private string $relatedTo;

    /**
     * Set the related to information
     *
     * @param string|array $relatedTo The related to information
     *
     * @return void
     */
    public function setRelatedTo(string|array $relatedTo): void
    {
        $relatedTo = array_filter($relatedTo);
        $relatedTo = implode(", ", $relatedTo);
        $this->relatedTo = $relatedTo;
    }

    /**
     * Returns the related to information as a string
     *
     * @return string
     */
    public function getRelatedTo(): string
    {
        $relatedTo = "<h2>Esta bolsa é relacionada ao(s) esporte(s)</h2>";
        $relatedTo .= "<p>{$this->relatedTo}</p>";

        return $relatedTo;
    }

    /**
     * This function overrides the parent class function
     *
     * @return string
     */
    public function wearBag(): string
    {
        return "Para todos os viciados em esporte!";
    }
}
