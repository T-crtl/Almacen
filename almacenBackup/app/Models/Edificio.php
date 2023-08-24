<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Edificio
 *
 * @property $id
 * @property $numero
 * @property $nombre
 * @property $nivel
 * @property $areaId
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Edificio extends Model
{
    
    static $rules = [
		'numero' => 'required',
		'nombre' => 'required',
		'nivel' => 'required',
		'areaId' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero','nombre','nivel','areaId'];



}
