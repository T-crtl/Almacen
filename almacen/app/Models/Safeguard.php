<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Safeguard
 *
 * @property $id
 * @property $cuenta_contable
 * @property $descripcion
 * @property $precio_inicial
 * @property $ejercicio
 * @property $porcentaje_depresiacion
 * @property $valor_historico
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Safeguard extends Model
{
    
    static $rules = [
		'cuenta_contable' => 'required',
		'descripcion' => 'required',
		'precio_inicial' => 'required',
		'ejercicio' => 'required',
		'porcentaje_depresiacion' => 'required',
		'valor_historico' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cuenta_contable','descripcion','precio_inicial','ejercicio','porcentaje_depresiacion','valor_historico'];



}
