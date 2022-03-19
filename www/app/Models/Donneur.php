<?php

namespace App\Models;

class Donneur
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomDonneur;

    /**
     * @var string
     */
    private $numTel;

    /** @var array<Don> */
    private $dons;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNomDonneur(): string
    {
        return $this->nomDonneur;
    }

    /**
     * @param string $nomDonneur
     */
    public function setNomDonneur(string $nomDonneur): void
    {
        $this->nomDonneur = $nomDonneur;
    }

    /**
     * @return string
     */
    public function getNumTel(): string
    {
        return $this->numTel;
    }

    /**
     * @param string $numTel
     */
    public function setNumTel(string $numTel): void
    {
        $this->numTel = $numTel;
    }

    /**
     * @return Don[]
     */
    public function getDons(): array
    {
        return $this->dons;
    }

    /**
     * @param Don[] $dons
     */
    public function setDons(array $dons): void
    {
        $this->dons = $dons;
    }



}