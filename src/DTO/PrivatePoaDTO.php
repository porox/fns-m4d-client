<?php

namespace Porox\FNSM4D\Client\DTO;

use Porox\FNSM4D\Client\DTO\Full\CreatorDTO;
use Porox\FNSM4D\Client\DTO\Full\DelegationDTO;
use Porox\FNSM4D\Client\DTO\Full\IssuerDTO;

class PrivatePoaDTO extends AbstractPoaDTO
{

    protected string $id;
    protected string $number;
    protected string $formatVersion;
    protected DelegationDTO $delegation;
    protected bool $irrevocableRight;
    protected bool $collectiveRight;
    protected string $type;
    protected string $createdDate;
    protected string $startDate;
    protected string $endDate;
    protected IssuerDTO $issuer;
    protected array $representatives;

    protected array $authority;
    //todo заполнить объектом
    protected array $transferredAuthority;
    protected string $status;
    protected string $statusDate;
    protected CreatorDTO $creator;
    protected ?string  $revokeReason;
    protected ?string  $rejectReason;

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
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getFormatVersion(): string
    {
        return $this->formatVersion;
    }

    /**
     * @param string $formatVersion
     */
    public function setFormatVersion(string $formatVersion): void
    {
        $this->formatVersion = $formatVersion;
    }

    /**
     * @return DelegationDTO
     */
    public function getDelegation(): DelegationDTO
    {
        return $this->delegation;
    }

    /**
     * @param DelegationDTO $delegation
     */
    public function setDelegation(DelegationDTO $delegation): void
    {
        $this->delegation = $delegation;
    }

    /**
     * @return bool
     */
    public function isIrrevocableRight(): bool
    {
        return $this->irrevocableRight;
    }

    /**
     * @param bool $irrevocableRight
     */
    public function setIrrevocableRight(bool $irrevocableRight): void
    {
        $this->irrevocableRight = $irrevocableRight;
    }

    /**
     * @return bool
     */
    public function isCollectiveRight(): bool
    {
        return $this->collectiveRight;
    }

    /**
     * @param bool $collectiveRight
     */
    public function setCollectiveRight(bool $collectiveRight): void
    {
        $this->collectiveRight = $collectiveRight;
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
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->createdDate;
    }

    /**
     * @param string $createdDate
     */
    public function setCreatedDate(string $createdDate): void
    {
        $this->createdDate = $createdDate;
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
     * @return IssuerDTO
     */
    public function getIssuer(): IssuerDTO
    {
        return $this->issuer;
    }

    /**
     * @param IssuerDTO $issuer
     */
    public function setIssuer(IssuerDTO $issuer): void
    {
        $this->issuer = $issuer;
    }

    /**
     * @return array
     */
    public function getAuthority(): array
    {
        return $this->authority;
    }

    /**
     * @param array $authority
     */
    public function setAuthority(array $authority): void
    {
        $this->authority = $authority;
    }

    /**
     * @return array
     */
    public function getTransferredAuthority(): array
    {
        return $this->transferredAuthority;
    }

    /**
     * @param array $transferredAuthority
     */
    public function setTransferredAuthority(array $transferredAuthority): void
    {
        $this->transferredAuthority = $transferredAuthority;
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
     * @return CreatorDTO
     */
    public function getCreator(): CreatorDTO
    {
        return $this->creator;
    }

    /**
     * @param CreatorDTO $creator
     */
    public function setCreator(CreatorDTO $creator): void
    {
        $this->creator = $creator;
    }

    /**
     * @return string|null
     */
    public function getRevokeReason(): ?string
    {
        return $this->revokeReason;
    }

    /**
     * @param string|null $revokeReason
     */
    public function setRevokeReason(?string $revokeReason): void
    {
        $this->revokeReason = $revokeReason;
    }

    /**
     * @return string|null
     */
    public function getRejectReason(): ?string
    {
        return $this->rejectReason;
    }

    /**
     * @param string|null $rejectReason
     */
    public function setRejectReason(?string $rejectReason): void
    {
        $this->rejectReason = $rejectReason;
    }

    /**
     * @return array
     */
    public function getRepresentatives(): array
    {
        return $this->representatives;
    }

    /**
     * @param array $representatives
     */
    public function setRepresentatives(array $representatives): void
    {
        $this->representatives = $representatives;
    }



}