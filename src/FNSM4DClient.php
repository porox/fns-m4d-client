<?php

namespace Porox\FNSM4D\Client;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Porox\FNSM4D\Client\DTO\PrivatePoaDTO;
use Porox\FNSM4D\Client\DTO\PublicPoaDTO;
use Porox\FNSM4D\Client\Exception\FnsMchdException;
use Porox\FNSM4D\Client\Exception\PoaNotFoundException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 *
 */
class FNSM4DClient implements FNSM4DClientInterface
{
    /**
     *
     */
    private const HOST = 'https://m4d.nalog.gov.ru';

    /**
     * @var ClientInterface
     */
    protected $httpClient;

    /**
     * @param ClientInterface $httpClient
     */
    public function __construct(ClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * @param string $poaNumber
     *
     * @return PublicPoaDTO
     * @throws FnsMchdException
     * @throws PoaNotFoundException
     */
    public function checkM4D(string $poaNumber): PublicPoaDTO
    {
        $res   = $this->makeGetRequest(self::HOST . '/api/v0/poar-portal/public/poa/' . urlencode($poaNumber) .
            '/public', $poaNumber);
        $array = json_decode($res->getBody()->getContents(), true);
        $dto   = new PublicPoaDTO();
        $this->fillDTO($dto, $array);

        return $dto;
    }

    /**
     * @param string $poaNumber
     * @param string $orgInn
     * @param string $inn
     *
     * @return PrivatePoaDTO
     * @throws FnsMchdException
     * @throws PoaNotFoundException
     */
    public function getM4DFullInfo(string $poaNumber, string $orgInn, string $inn): PrivatePoaDTO
    {
        $res   = $this->makeGetRequest($this->getPrivateUrl($poaNumber, $orgInn, $inn) . '/private', $poaNumber);
        $array = json_decode($res->getBody()->getContents(), true);
        $dto   = new PrivatePoaDTO();
        $this->fillDTO($dto, $array, "Porox\\FNSM4D\\Client\\DTO\\Full\\");

        return $dto;

    }

    /**
     * @param string $poaNumber
     * @param string $orgInn
     * @param string $inn
     *
     * @return StreamInterface
     * @throws FnsMchdException
     * @throws PoaNotFoundException
     */
    public function getM4DPDF(string $poaNumber, string $orgInn, string $inn): StreamInterface
    {
        $res = $this->makeGetRequest($this->getPrivateUrl($poaNumber, $orgInn, $inn) . '/pdf', $poaNumber);
        $res->getBody()->rewind();

        return $res->getBody();
    }

    /**
     * @param string $poaNumber
     * @param string $orgInn
     * @param string $inn
     *
     * @return StreamInterface
     * @throws FnsMchdException
     * @throws PoaNotFoundException
     */
    public function getM4DZip(string $poaNumber, string $orgInn, string $inn): StreamInterface
    {
        $res = $this->makeGetRequest($this->getPrivateUrl($poaNumber, $orgInn, $inn) . '/zip', $poaNumber);
        $res->getBody()->rewind();

        return $res->getBody();
    }


    /**
     * @param string $poaNumber
     * @param string $orgInn
     * @param string $inn
     *
     * @return string
     */
    private function getPrivateUrl(string $poaNumber, string $orgInn, string $inn): string
    {
        return self::HOST . '/api/v0/poar-portal/public/poa/' . urlencode($poaNumber) . '/' . urlencode($orgInn) . '/' .
            urlencode($inn);
    }

    /**
     * @return string[]
     */
    private function getBaseHeaders(): array
    {
        return [
            'X-Requested-With' => 'XMLHttpRequest',
            'User-Agent'       => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.2 Safari/605.1.15',
            'Cache-Control'    => 'no-cache',
        ];
    }

    /**
     * @param string $url
     * @param string $poaNumber
     *
     * @return ResponseInterface
     * @throws FnsMchdException
     * @throws PoaNotFoundException
     */
    private function makeGetRequest(string $url, string $poaNumber): ResponseInterface
    {
        try {
            $res = $this->httpClient->request('GET', $url, [
                RequestOptions::HEADERS     => $this->getBaseHeaders(),
                RequestOptions::HTTP_ERRORS => false
            ]);
            if ($res->getStatusCode() === 200) {
                return $res;
            } elseif ($res->getStatusCode() === 404) {
                throw new PoaNotFoundException('Доверенность ' . $poaNumber . ' не найдена');
            } else {
                throw new FnsMchdException('Ошибка в ходе выполнения запроса. HTTP code: '.$res->getStatusCode());
            }
        } catch (GuzzleException $exception) {
            throw new FnsMchdException('Ошибка в ходе выполнения запроса: ' . $exception->getMessage());
        }
    }

    /**
     * @param       $dto
     * @param array $json
     * @param       $nameSpace
     *
     * @return void
     */
    private function fillDTO($dto, array $json, $nameSpace = null)
    {
        foreach ($json as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($dto, $method)) {
                if (is_array($value) && class_exists($nameSpace . ucfirst($key) . "DTO")) {

                    if (isset($value[0])) {
                        $res = [];
                        foreach ($value as $item) {
                            $subDto = new ($nameSpace . ucfirst($key) . "DTO")();
                            $this->fillDTO($subDto, $item, $nameSpace);
                            $res[] = clone $subDto;
                        }

                    } else {
                        $res = new ($nameSpace . ucfirst($key) . "DTO")();
                        $this->fillDTO($res, $value, $nameSpace);
                    }

                    $dto->$method($res);

                } else {
                    $dto->$method($value);
                }

            }
        }
    }
}