<?php

namespace App\Models;

use App\Observers\ViaCepObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([ViaCepObserver::class])]
class ViaCep extends Model
{
    use HasFactory;

    protected $fillable = [
        'cep',
    ];
}
