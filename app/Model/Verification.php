<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    protected $fillable = [
        'certification_name',
        'certification_number',
        'organization_name',
        'stander',
        'initial_date',
        'issue_date',
        'end_date',
    ];
}
