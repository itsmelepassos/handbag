<?php

namespace ItsMeLePassos\HandBag\Bags;

use ItsMeLePassos\HandBag\Bag;
use Override;

class SportsBag extends Bag
{
    private string $relatedTo;

    public function setRelatedTo(string|array $relatedTo): void
    {
        $relatedTo = array_filter($relatedTo);
        $relatedTo = implode(", ", $relatedTo);
        $this->relatedTo = $relatedTo;
    }

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
