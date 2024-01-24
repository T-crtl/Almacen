<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consulta
 *
 * @property $id
 * @property $registro
 * @property $resguardatario
 * @property $fecha
 * @property $area
 * @property $observaciones
 * @property $documento
 * @property $numInv
 * @property $articulo
 * @property $descripcion
 * @property $marca
 * @property $modelo
 * @property $serie
 * @property $fechaEntrada
 * @property $total
 * @property $monto
 * @property $firma
 * @property $inventarios
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consulta extends Model
{
    
    static $rules = [
		'nomina' => 'required',
		'resguardatario' => 'required',
		'fecha' => 'required',
		'area' => 'required',
		'observaciones' => 'required',
		'documento' => 'required',
		'numInv' => 'required',
		'articulo' => 'required',
		'descripcion' => 'required',
		'marca' => 'required',
		'modelo' => 'required',
		'serie' => 'required',
		'fechaEntrada' => 'required',
		'total' => 'required',
		'monto' => 'required',
		'firma' => 'required',
		'inventarios' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nomina','resguardatario','fecha','area','observaciones','documento','numInv','articulo','descripcion','marca','modelo','serie','fechaEntrada','total','monto','firma','inventarios'];

	public function cons()
	{
		return $this->hasOne('App\Models\Peopledatabase', 'id', 'resguardatario');
		return $this->hasOne('App\Models\Peopledatabase', 'id', 'nomina');
	}
	public function equipo()
	{
		return $this->hasOne('App\Models\Equipo', 'id', 'id');
		return $this->hasOne('App\Models\Equipo', 'id', 'articulo');
		return $this->hasOne('App\Models\Equipo', 'id', 'descripcion');
		return $this->hasOne('App\Models\Equipo', 'id', 'marca');
		return $this->hasOne('App\Models\Equipo', 'id', 'serie');
		return $this->hasOne('App\Models\Equipo', 'id', 'fechaEntrada');
		return $this->hasOne('App\Models\Equipo', 'id', 'monto');
	}
	public function firmas()
	{
		return $this->hasOne('App\Models\Firma', 'id', 'firma');
		return $this->hasOne('App\Models\Firma', 'id', 'inventarios');
	}
	public function ubicacion()
	{
		return $this->hasOne('App\Models\Area', 'id', 'area');
	}

}
