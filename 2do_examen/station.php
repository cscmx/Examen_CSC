<?php

require_once 'nameLine.php';

class Station
{
    private string $name;
    private nameLine $line;
    private int $year;
    private int $exits;
    private ?string $correspondence; 
    

    public function __construct(string $name, nameLine $line, int $year, int $exits, ?string $correspondence = null)
    {
        $this->name = $name;
        $this->line = $line;
        $this->year = $year;
        $this->exits = $exits;
        $this->correspondence = $correspondence;
    }

    public function getName(): string
    {
        return $this->name;
    }
        public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getLine(): nameLine
    {
        return $this->line;
    }
    public function setLine(nameLine $line)
    {
        $this->line = $line;
    }
    public function getYear(): int
    {
        return $this->year;
    }
        public function setYear(int $year)
    {
        $this->year = $year;
    }

    public function getExits(): int
    {
        return $this->exits;
    }
    public function setExits(int $exits)
    {
        $this->exits = $exits;
    }

    public function getCorrespondence (): ?string 
    {
        return $this->correspondence;
    }
    public function setCorrespondence (?string $correspondence)
    {
        $this->correspondence = $correspondence;
    }



}

?>
