<?php

namespace App\Observers;

use App\Models\ViaCep;
use Illuminate\Support\Facades\Log;

class ViaCepObserver
{
    /**
     * Handle the ViaCep "created" event.
     */
    public function created(ViaCep $viaCep): void
    {
        Log::info('CEP REGISTRADO', [
            'cep' => $viaCep->cep,
            'dt_insercao' => 'johndoe@example.com',
        ]);
    }

    /**
     * Handle the ViaCep "updated" event.
     */
    public function updated(ViaCep $viaCep): void
    {
        //
    }

    /**
     * Handle the ViaCep "deleted" event.
     */
    public function deleted(ViaCep $viaCep): void
    {
        //
    }

    /**
     * Handle the ViaCep "restored" event.
     */
    public function restored(ViaCep $viaCep): void
    {
        //
    }

    /**
     * Handle the ViaCep "force deleted" event.
     */
    public function forceDeleted(ViaCep $viaCep): void
    {
        //
    }
}
