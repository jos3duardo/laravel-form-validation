<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    const MARITAL_STATUS = [
        1 => 'Solteiro',
        2 => 'Casado',
        3 => 'Divorciado'
    ];
}
