<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Edificio
 *
 * @property $id
 * @property $numero
 * @property $descripcion
 * @property $nivelId
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
		'descripcion' => 'required',
		'nivelId' => 'required',
		'areaId' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero','descripcion','nivelId','areaId'];

    /**
    *@return \Illuminate\Database\Eloquent\Relations\HasOne
    */
    public function areas()
    {
      return $this->hasOne('App\Models\Area', 'id', 'areaId');
    }
    public function areaEdificios()
    {
      return $this->hasMany('App\Models\Area', 'edificioID', 'id');
      
    }

}
