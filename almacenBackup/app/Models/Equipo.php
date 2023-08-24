<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 *
 * @property $id
 * @property $descripcion
 * @property $marca
 * @property $modelo
 * @property $precio
 * @property $fechaEntrada
 * @property $estatus
 * @property $articulo
 * @property $rutaImg
 * @property $tipoAdq
 * @property $areaId
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equipo extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
		'marca' => 'required',
		'modelo' => 'required',
		'precio' => 'required',
		'fechaEntrada' => 'required',
		'estatus' => 'required',
		'articulo' => 'required',
		'rutaImg' => 'required',
		'tipoAdq' => 'required',
		'areaId' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','marca','modelo','precio','fechaEntrada','estatus','articulo','rutaImg','tipoAdq','areaId'];



}
