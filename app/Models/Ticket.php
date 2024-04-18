<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable =
    [
        'email',
        'name',
        'surname',
        'city',
        'ex_date',
        'cc_number',
        'child',
        'teen',
        'adult'
    ];
}
