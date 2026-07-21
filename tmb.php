<?php

require_once 'station.php';

class TMB
{
    private array $stations;

    public function addStation (Station $station): void
    {
        $this->stations[] = $station;
    }


    public function withoutCorrespondence (): array
    {
        $stationsWithoutCorrespondence = [];
        foreach($this->stations as $station){
            if(is_null($station->getCorrespondence())){
                $stationsWithoutCorrespondence[] = $station->getName();
            }
        }
        return $stationsWithoutCorrespondence; 

    }

    //dada una línea de metro, devuelva estaciones de esa línea.
    public function getStationsOfMetroLine(NameLine $line): array
    {
        $stationsOfLine = [];
        foreach($this->stations as $station)
            {
                if($station->getLine() == $line)
                    {
                    $stationsOfLine[] = $station;
                    }
            }
        return $stationsOfLine;
    }


    
}
?>