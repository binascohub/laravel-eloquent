<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    const MARITAL_STATUS = [
        1 => 'Solteiro',
        2 => 'Casado',
        3 => 'Divorciado'
    ];

    const TYPE_INDIVIDUAL = 'individual';
    const TYPE_LEGAL = 'legal';

    protected $fillable = [
        'name',
        'document_number',
        'email',
        'phone',
        'defaulter',
        'date_birth',
        'sex',
        'marital_status',
        'physical_disability',
        'company_name',
        'client_type',
        'soccer_team_id'
    ];


    // relacionamento many-to-one
    public function soccerTeam()
    {
        return $this->belongsTo(SoccerTeam::class);
    }

    // relacionamento one-to-one
    public function clientProfile()
    {
        return $this->hasOne(ClientProfile::class);
    }
}
