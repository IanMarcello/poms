<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'userId',
        'startDate',
        'endDate',
        'source',
        'destination',
        'requestType',
        'requestDesc',
        'requestStatus',
        'approveStatus'
    ];
}
