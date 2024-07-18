<?php

namespace App\Http\Controllers\Api;

use App\DTOs\ApiResponseDTO;
use App\Http\Controllers\Controller;
use App\Services\ViaCEPService;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ViaCepController extends Controller
{
    /**
     * @var ViaCEPService
     */
    protected ViaCEPService $viaCepService;

    /**
     * @param ViaCepService $viaCepService
     */
    public function __construct(ViaCepService $viaCepService)
    {
        $this->viaCepService = $viaCepService;
    }

    /**
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(string|array $ceps)
    {
        $dataCeps = array_unique(explode(',', $ceps));

        $address = Arr::map($dataCeps, function ($value, $key) {
            return $this->viaCepService->getAddressByCep($value);
        });

        $address = Arr::whereNotNull($address);

        if (count($address)) {
            return response()->json($address);
        }

        return response()->json(['message' => 'CEP(s) Inválido(s) ou nao encontrado(s).'], 404);
    }
}
