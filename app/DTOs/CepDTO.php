<?php

namespace App\DTOs;

class CepDTO
{
    /**
     * @var string
     */
    public string $cep;
    /**
     * @var string
     */
    public string $logradouro;
    /**
     * @var string
     */
    public string $complemento;
    /**
     * @var string
     */
    public string $bairro;
    /**
     * @var string
     */
    public string $localidade;
    /**
     * @var string
     */
    public string $uf;
    /**
     * @var string
     */
    public string $ibge;
    /**
     * @var string
     */
    public string $gia;
    /**
     * @var string
     */
    public string $ddd;
    /**
     * @var string
     */
    public string $siafi;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->cep = $data['cep'];
        $this->logradouro = $data['logradouro'];
        $this->complemento = $data['complemento'];
        $this->bairro = $data['bairro'];
        $this->localidade = $data['localidade'];
        $this->uf = $data['uf'];
        $this->ibge = $data['ibge'];
        $this->gia = $data['gia'];
        $this->ddd = $data['ddd'];
        $this->siafi = $data['siafi'];
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'cep' => $this->cep,
            'logradouro' => $this->logradouro,
            'complemento' => $this->complemento,
            'bairro' => $this->bairro,
            'localidade' => $this->localidade,
            'uf' => $this->uf,
            'ibge' => $this->ibge,
            'gia' => $this->gia,
            'ddd' => $this->ddd,
            'siafi' => $this->siafi,
        ];
    }
}
