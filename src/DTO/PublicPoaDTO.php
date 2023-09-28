<?php

namespace Porox\FNSM4D\Client\DTO;

class PublicPoaDTO extends AbstractPoaDTO
{
    protected string $poaNumber;
    protected  string $startDate;
    protected string $endDate;
    protected string $status;
    protected string $statusDate;
    protected string $issuerPublicKey;

    /**
     * @return string
     */
    public function getPoaNumber(): string
    {
        return $this->poaNumber;
    }

    /**
     * @param string $poaNumber
     */
    public function setPoaNumber(string $poaNumber): void
    {
        $this->poaNumber = $poaNumber;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     */
    public function setStartDate(string $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     */
    public function setEndDate(string $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getStatusDate(): string
    {
        return $this->statusDate;
    }

    /**
     * @param string $statusDate
     */
    public function setStatusDate(string $statusDate): void
    {
        $this->statusDate = $statusDate;
    }

    /**
     * @return string
     */
    public function getIssuerPublicKey(): string
    {
        return $this->issuerPublicKey;
    }

    /**
     * @param string $issuerPublicKey
     */
    public function setIssuerPublicKey(string $issuerPublicKey): void
    {
        $this->issuerPublicKey = $issuerPublicKey;
    }

}