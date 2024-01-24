<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 *
 * @property $id
 * @property $numInv
 * @property $descripcion
 * @property $marca
 * @property $modelo
 * @property $serie
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
		'serie' => 'required',
		'estatus' => 'required',
		'articulo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','marca','modelo','serie','precio','fechaEntrada','estatus','articulo','rutaImg','tipoAdq','areaId'];

    /**
    *@return \Illuminate\Database\Eloquent\Relations\HasOne
    */
    public function areas()
    {
      return $this->hasOne('App\Models\Area', 'id', 'areaId');
    }
    
}
