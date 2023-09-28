<?php

namespace Porox\FNSM4D\Client\DTO\Full;

class IssuerDTO
{
    protected ?string $name;
    protected ?string $inn;
    protected ?string $kpp;
    protected ?string $ogrn;
    protected ?string $address;
    protected ?string $innerJuridical;

    protected SignerDTO $signer;
    protected string $type;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getInn(): ?string
    {
        return $this->inn;
    }

    /**
     * @param string|null $inn
     */
    public function setInn(?string $inn): void
    {
        $this->inn = $inn;
    }

    /**
     * @return string|null
     */
    public function getKpp(): ?string
    {
        return $this->kpp;
    }

    /**
     * @param string|null $kpp
     */
    public function setKpp(?string $kpp): void
    {
        $this->kpp = $kpp;
    }

    /**
     * @return string|null
     */
    public function getOgrn(): ?string
    {
        return $this->ogrn;
    }

    /**
     * @param string|null $ogrn
     */
    public function setOgrn(?string $ogrn): void
    {
        $this->ogrn = $ogrn;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string|null
     */
    public function getInnerJuridical(): ?string
    {
        return $this->innerJuridical;
    }

    /**
     * @param string|null $innerJuridical
     */
    public function setInnerJuridical(?string $innerJuridical): void
    {
        $this->innerJuridical = $innerJuridical;
    }

    /**
     * @return SignerDTO
     */
    public function getSigner(): SignerDTO
    {
        return $this->signer;
    }

    /**
     * @param SignerDTO $signer
     */
    public function setSigner(SignerDTO $signer): void
    {
        $this->signer = $signer;
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