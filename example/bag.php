<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../template/itsmelepassos.php";

use ItsMeLePassos\HandBag\Bags\LuxuryBag;
use ItsMeLePassos\HandBag\Bags\SportsBag;

$luxuryBag = new LuxuryBag();
$luxuryBag->setModel('Side Trunk PM');
$luxuryBag->setBrand('Louis Vutton');
$luxuryBag->setDescription('Inspirada nos baús históricos da Maison, a bolsa retangular Side Trunk PM é confeccionada em canvas Monogram com acabamento em couro natural e ferragens douradas. Os cantos reforçados e o fecho S-lock remetem claramente aos baús da Louis Vuitton. Ela pode ser carregada à mão ou no ombro, graças à alça de couro removível e ajustável.');
$luxuryBag->setVariant(['red', 'green']);
$luxuryBag->setSize('18 x 12.5 x 8 cm');
$luxuryBag->setFunctionalities('Alça Removível Ajustável; Comprimento da Alça Dobrada: 48.0 cm; Comprimento Máximo da Alça:58.0 cm; Alça de Mão:Única, removível');
$luxuryBag->setPrice(22200.00);
$luxuryBag->setParticularities('Canvas Monogram, Acabamento em couro, Forro em microfibra, Ferragens douradas');

echo $luxuryBag->bag();
echo $luxuryBag->getParticularities();
echo $luxuryBag->wearBag();
echo "<hr/>";

$sportsBag = new SportsBag();
$sportsBag->setModel('Bolsão de Viagem Wilson Esportivo');
$sportsBag->setBrand('Wilson');
$sportsBag->setDescription('Prepare-se para viajar com praticidade! Garanta o Bolsão de Viagem Wilson Esportivo 50L e tenha estilo e funcionalidade em suas aventuras! Peça que é escolha ideal para quem busca espaço e resistência. Com amplo compartimento e design esportivo, é perfeito para viagens. Combine-a com roupas confortáveis, como calças de moletom e camisetas, e aposte em comodidade, praticidade e um toque esportivo no estilo durante suas jornadas. Perfeita para atender às necessidades de quem busca um acessório robusto e com um visual único.');
$sportsBag->setVariant(['Preto e Bege']);
$sportsBag->setSize('50 litros');
$sportsBag->setFunctionalities('Bolsa lateral');
$sportsBag->setPrice(132.99);
$sportsBag->setRelatedTo(['Todos os tipos de esporte']);

echo $sportsBag->bag();
echo $sportsBag->getRelatedTo();
echo $sportsBag->wearBag();
echo "<hr/>";