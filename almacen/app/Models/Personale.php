<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Personale
 *
 * @property $id
 * @property $nomina
 * @property $nombre
 * @property $adscripcion
 * @property $tipo_contrato
 * @property $plantelId
 * @property $funcion
 * @property $password
 * @property $correo
 * @property $rutaImg
 * @property $estatus
 * @property $nivel_educativo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Personale extends Model
{
    
    static $rules = [
		'nomina' => 'required',
		'nombre' => 'required',
		'adscripcion' => 'required',
		'tipo_contrato' => 'required',
		'plantelId' => 'required',
		'funcion' => 'required',
		'correo' => 'required',
		'estatus' => 'required',
		'nivel_educativo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nomina','nombre','adscripcion','tipo_contrato','plantelId','funcion','correo','rutaImg','estatus','nivel_educativo'];



}
