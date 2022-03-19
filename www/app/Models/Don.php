<?php

namespace App\Models;

class Don
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomDon;

    /**
     * @var string
     */
    private $type;

    /** @var Donneur */
    private $donneur;

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
    public function getNomDon(): string
    {
        return $this->nomDon;
    }

    /**
     * @param string $nomDon
     */
    public function setNomDon(string $nomDon): void
    {
        $this->nomDon = $nomDon;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return Donneur
     */
    public function getDonneur(): Donneur
    {
        return $this->donneur;
    }

    /**
     * @param Donneur $donneur
     */
    public function setDonneur(Donneur $donneur): void
    {
        $this->donneur = $donneur;
    }

}