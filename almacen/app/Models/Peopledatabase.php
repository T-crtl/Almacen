<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Peopledatabase
 *
 * @property $id
 * @property $nomina
 * @property $nombre
 * @property $adscripcion
 * @property $tipo_contrato
 * @property $funcion
 * @property $password
 * @property $correo
 * @property $foto
 * @property $estatus
 * @property $nivel_educativo
 * @property $plantelID
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Peopledatabase extends Model
{
    
    static $rules = [
		'nomina' => 'required',
		'nombre' => 'required',
		'adscripcion' => 'required',
		'tipo_contrato' => 'required',
		'funcion' => 'required',
		'correo' => 'required',
    'foto' => 'required',
		'estatus' => 'required',
		'nivel_educativo' => 'required',
		'plantelID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nomina','nombre','adscripcion','tipo_contrato','funcion','correo','foto','estatus','nivel_educativo','plantelID'];

    public function campus()
    {
      return $this->hasOne('App\Models\Campus', 'id', 'plantelID');
    }

}
