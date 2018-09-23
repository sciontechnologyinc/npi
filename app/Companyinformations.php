<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companyinformations extends Model
{
    protected $table="companyinformation";
	protected $fillable = [
        'missionstatement',
        'philosophy',
        'ourrole',
        'ourvalues',
        'address',
        'contactno',
        'email',
        'facebook',
        'twitter',
        'instagram'
	];
}
