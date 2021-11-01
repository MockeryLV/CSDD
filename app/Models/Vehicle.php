<?php

namespace App\Models;

class Vehicle
{

    private int $id;
    private int $numurs;
    private string $rn;
    private string $datums;
    private ?string $s_datums;

    public function __construct(int $id, int $numurs, string $rn, string $datums, ?string $s_datums)
    {
        $this->id = $id;
        $this->numurs = $numurs;
        $this->rn = $rn;
        $this->datums = $datums;
        $this->s_datums = $s_datums;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getDatums(): string
    {
        return $this->datums;
    }

    public function getNumurs(): int
    {
        return $this->numurs;
    }

    public function getRn(): string
    {
        return $this->rn;
    }

    public function getSDatums(): ?string
    {
        return $this->s_datums;
    }

}
