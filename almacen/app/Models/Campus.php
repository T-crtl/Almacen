<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Campus
 *
 * @property $id
 * @property $numero
 * @property $descripcion
 * @property $ubicacion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Campus extends Model
{
    
    static $rules = [
		'numero' => 'required',
		'descripcion' => 'required',
		'ubicacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero','descripcion','ubicacion'];

    /**
    *@return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function Location()
    {
      return $this->hasMany('App\Models\Firma', 'PlantelID', 'id');
      return $this->hasMany('App\Models\Area', 'plantelID', 'id');
    }

}
