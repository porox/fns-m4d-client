<?php

namespace Porox\FNSM4D\Client;

use Porox\FNSM4D\Client\DTO\PrivatePoaDTO;
use Porox\FNSM4D\Client\DTO\PublicPoaDTO;
use Porox\FNSM4D\Client\Exception\FNSMchdExceptionInterface;

/**
 *
 */
interface FNSM4DClientInterface
{
    /**
     * @description Проверка статуса МЧД
     *
     * @param string $poaNumber
     *
     * @return PublicPoaDTO
     * @throws FNSMchdExceptionInterface
     */
    public function checkM4D(string $poaNumber): PublicPoaDTO;

    /**
     * @description Получение полных сведений о МЧД
     *
     * @param string $poaNumber
     * @param string $orgInn
     * @param string $inn
     *
     * @return PrivatePoaDTO
     * @throws FNSMchdExceptionInterface
     */
    public function getM4DFullInfo(string $poaNumber, string $orgInn, string $inn): PrivatePoaDTO;

    /**
     * @description Получение pdf файла МЧД
     * @param string $poaNumber
     * @param string $orgInn
     * @param string $inn
     *
     * @return mixed
     * @throws FNSMchdExceptionInterface
     */
    public function getM4DPDF(string $poaNumber, string $orgInn, string $inn);

    /**
     * @description Получение pdf файла МЧД
     * @param string $poaNumber
     * @param string $orgInn
     * @param string $inn
     *
     * @return mixed
     * @throws FNSMchdExceptionInterface
     */
    public function getM4DZip(string $poaNumber, string $orgInn, string $inn);
}