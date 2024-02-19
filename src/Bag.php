<?php

namespace ItsMeLePassos\HandBag;

class Bag
{
    private string $model;
    private string $brand;
    private string|null $description;
    private string|array $variant;
    private string $size;
    private string $functionalities;
    private float $price;

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function setVariant(string|array $variant): void
    {
        $variant = array_filter($variant);
        $variant = implode(", ", $variant);
        $this->variant = $variant;
    }

    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    public function setFunctionalities(string $functionalities): void
    {
        $this->functionalities = $functionalities;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * 
     * @return string 
     */
    public function bag(): string
    {
        $bag = "<h1>Esta é a bolsa {$this->model}, da marca {$this->brand}</h1>";
        $bag .= "<p>Descrição: {$this->description}</p><br />";
        $bag .= "<p>Está dispoonível nas opções {$this->variant}</p><br />";
        $bag .= "<p>Tamanho: {$this->size}</p>";
        $bag .= "<p>Funcionalidades: {$this->functionalities}</p><br />";
        $bag .= "<p>Preço: {$this->price}</p><br /><br />";
        return $bag;
    }
}