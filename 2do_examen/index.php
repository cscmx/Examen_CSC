<?php
/* Llevamos un registro de estaciones de metro. De cada estación conocemos:
Nombre
Línea
Año de inauguración
Cantidad de salidas a la calle
Correspondencia con otras líneas o transportes
--------------------------------------------------
Registra, al menos, 4 estaciones y:
Crea una lógica que devuelva las estaciones que NO tengan correspondencias.
Crea otra lógica que, dada una línea de metro, devuelva estaciones
de esa línea.
*/
require_once 'tmb.php';
require_once 'station.php';
require_once 'nameLine.php';

$tmb = new TMB();

$stations = [
    new Station ('Plaza España', nameLine::RED, 1975, 5, 'fgc'),
    new Station ('Urquinaona', nameLine::RED, 1926, 4, null),
    new Station ('Rocafort', nameLine::RED, 1926, 4, null),
    new Station ('Paseo de Gracia', nameLine::GREEN, 1924, 4, 'renfe'),
    new Station ('Plaza España', nameLine::GREEN, 1975, 4, 'fgc'),
    new Station ('Verdaguer', nameLine::BLUE, 1973, 4, 'yellow line'),
    new Station ('Glorias', nameLine::RED, 1951, 4, 'tram')
];


foreach($stations as $station)
{
    $tmb->addStation($station);
}

echo "The stations without correspondence are: ".PHP_EOL;
print_r($tmb->withoutCorrespondence());

echo "The stations of RED line are: ";
print_r($tmb->getStationsOfMetroLine(nameLine::RED));





?>
