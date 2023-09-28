<?php

namespace Porox\FNSM4D\Client\DTO\Full;

class DelegationDTO
{
    protected ?bool $right;
    protected ?string $parentId;
    protected ?string $parentNumber;

    /**
     * @return bool|null
     */
    public function getRight(): ?bool
    {
        return $this->right;
    }

    /**
     * @param bool|null $right
     */
    public function setRight(?bool $right): void
    {
        $this->right = $right;
    }

    /**
     * @return string|null
     */
    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    /**
     * @param string|null $parentId
     */
    public function setParentId(?string $parentId): void
    {
        $this->parentId = $parentId;
    }

    /**
     * @return string|null
     */
    public function getParentNumber(): ?string
    {
        return $this->parentNumber;
    }

    /**
     * @param string|null $parentNumber
     */
    public function setParentNumber(?string $parentNumber): void
    {
        $this->parentNumber = $parentNumber;
    }


}