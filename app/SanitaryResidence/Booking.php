<?php

namespace App\SanitaryResidence;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from', 'to', 'indications', 'observations', 'patient_id', 'room_id'
    ];

    protected $dates = [
        'from','to'
    ];


    public function patient() {
        return $this->belongsTo('App\Patient');
    }

    public function room() {
        return $this->belongsTo('App\SanitaryResidence\Room');
    }

    public function vitalSigns() {
        return $this->hasMany('App\SanitaryResidence\VitalSign');
    }
}