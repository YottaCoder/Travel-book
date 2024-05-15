<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'Organization',
        'TourName',
        'DestinationFrom',
        'DestinationTo',
        'date',
        'Prize',
        'TourDay',
        'TourNights',
        'Facility',
        'TourPhoto',     
    ];
}
