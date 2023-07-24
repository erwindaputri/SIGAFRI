<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User as Authenticatable;


class ModelAuthenticate extends Authenticatable
{

	protected $keyType = 'string';
    public $incrementing = false;


}