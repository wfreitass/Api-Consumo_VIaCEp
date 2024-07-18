<?php

namespace App\Services;

use App\DTOs\CepDTO;
use App\Models\ViaCep;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;


class ViaCEPService
{
    /**
     * @var Http
     */
    private Http $httpClient;

    /**
     * @var ViaCep
     */
    private ViaCep $viaCep;

    /**
     * @var string
     */
    private string $viaCepAddress = "https://viacep.com.br/ws";

    /**
     * @var string
     */
    private string $returnFormartJson = "json";


    /**
     * @param Http $httpClient
     * @param ViaCep $viaCep
     */
    public function __construct(Http $httpClient, ViaCep $viaCep)
    {
        $this->httpClient = $httpClient;
        $this->viaCep = $viaCep;
    }

    /**
     *
     * @param string $cep 
     * @return array|null 
     */
    public function getAddressByCEP($cep)
    {
        $response = $this->httpClient::get("$this->viaCepAddress/$cep/$this->returnFormartJson/");

        if ($response->successful()) {
            $data = json_decode($response->getBody()->getContents(), true);

            if (isset($data['erro']) && $data['erro'] === 'true') {
                return null;
            }
            $this->viaCep->create(["cep" => $cep]);
            return new CepDTO($data);
        } else {
            return null;
        }
    }
}
