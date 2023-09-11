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
		'cuenta' => 'required',
		'numInv' => 'required',
		'marca' => 'required',
		'modelo' => 'required',
		'serie' => 'required',
		'num_ref' => 'required',
		'factura' => 'required',
		'proveedor' => 'required',
		'pedido' => 'required',
		'contrato' => 'required',
		'estado' => 'required',
		'resguardo' => 'required',
		'resguardo2' => 'required',
		'observaciones' => 'required',
		'precio' => 'required',
		'fechaEntrada' => 'required',
		'fechaBaja' => 'required',
		'nomina' => 'required',
		'nomina2' => 'required',
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
    protected $fillable = ['descripcion','cuenta','numInv','marca','modelo','serie','num_ref','factura','proveedor','pedido','contrato','estado','resguardo','resguardo2','observaciones','precio','fechaEntrada','fechaBaja','nomina','nomina2','estatus','articulo','rutaImg','tipoAdq','areaId'];



}
