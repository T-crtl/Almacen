<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Firma
 *
 * @property $id
 * @property $NombrePersonal
 * @property $Funcion
 * @property $PlantelID
 * @property $NivelPuesto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Firma extends Model
{
    
    static $rules = [
		'NombrePersonal' => 'required',
		'Funcion' => 'required',
		'PlantelID' => 'required',
		'NivelPuesto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NombrePersonal','Funcion','PlantelID','NivelPuesto'];

    /**
    *@return \Illuminate\Database\Eloquent\Relations\HasOne
    */
    public function campuses()
    {
      return $this->hasOne('App\Models\Campus', 'id', 'PlantelID');
    }



}
