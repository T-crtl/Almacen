<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Area
 *
 * @property $id
 * @property $Descripcion
 * @property $Tipo
 * @property $Division
 * @property $PlantelID
 * @property $EdificioID
 * @property $Nivel
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Area extends Model
{
    
    static $rules = [
		'Descripcion' => 'required',
		'Tipo' => 'required',
		'Division' => 'required',
		'PlantelID' => 'required',
		'EdificioID' => 'required',
		'Nivel' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Descripcion','Tipo','Division','PlantelID','EdificioID','Nivel'];

    public function campus(){
      return $this->hasOne('App\Models\Campus', 'id', 'PlantelID');
    }

    public function edificio(){
      return $this->hasOne('App\Models\Edificio', 'id', 'EdificioID');
    }



}
