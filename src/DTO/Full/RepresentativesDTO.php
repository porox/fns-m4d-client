<?php

namespace Porox\FNSM4D\Client\DTO\Full;

class RepresentativesDTO
{
    protected string $id;
    protected string $fio;
    protected string $inn;
    protected string $snils;
    protected string $birthDate;
    protected ?string  $document;
    protected ?string $revoke;
    protected string $type;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFio(): string
    {
        return $this->fio;
    }

    /**
     * @param string $fio
     */
    public function setFio(string $fio): void
    {
        $this->fio = $fio;
    }

    /**
     * @return string
     */
    public function getInn(): string
    {
        return $this->inn;
    }

    /**
     * @param string $inn
     */
    public function setInn(string $inn): void
    {
        $this->inn = $inn;
    }

    /**
     * @return string
     */
    public function getSnils(): string
    {
        return $this->snils;
    }

    /**
     * @param string $snils
     */
    public function setSnils(string $snils): void
    {
        $this->snils = $snils;
    }

    /**
     * @return string
     */
    public function getBirthDate(): string
    {
        return $this->birthDate;
    }

    /**
     * @param string $birthDate
     */
    public function setBirthDate(string $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return string|null
     */
    public function getDocument(): ?string
    {
        return $this->document;
    }

    /**
     * @param string|null $document
     */
    public function setDocument(?string $document): void
    {
        $this->document = $document;
    }

    /**
     * @return string|null
     */
    public function getRevoke(): ?string
    {
        return $this->revoke;
    }

    /**
     * @param string|null $revoke
     */
    public function setRevoke(?string $revoke): void
    {
        $this->revoke = $revoke;
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

}