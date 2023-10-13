<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Area
 *
 * @property $id
 * @property $numero
 * @property $descripcion
 * @property $tipo
 * @property $division
 * @property $plantelID
 * @property $edificioID
 * @property $nivel
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Area extends Model
{
    
    static $rules = [
		'numero' => 'required',
		'descripcion' => 'required',
		'tipo' => 'required',
		'division' => 'required',
		'plantelID' => 'required',
		'edificioID' => 'required',
		'nivel' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero','descripcion','tipo','division','plantelID','edificioID','nivel'];

    /**
    *@return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function Location()
    {
      return $this->hasMany('App\Models\Equipo', 'areaId', 'id');
      return $this->hasMany('App\Models\Edificio', 'areaId', 'id');
    }

    /**
    *@return \Illuminate\Database\Eloquent\Relations\HasOne
    */
    public function campuses()
    {
      return $this->hasOne('App\Models\Campus', 'id', 'plantelID');
      return $this->hasOne('App\Models\Consulta', 'id', 'plantelID');
    }

    public function edificios()
    {
      return $this->hasOne('App\Models\Edificio', 'id', 'edificioID');
    }


}
