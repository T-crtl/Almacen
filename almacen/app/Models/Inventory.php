<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventory
 *
 * @property $id
 * @property $inventario
 * @property $descripcion
 * @property $area_asignada
 * @property $fecha_reporte
 * @property $valor
 * @property $plantel
 * @property $estatus
 * @property $total_bienes
 * @property $monto_bienes
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inventory extends Model
{
    
    static $rules = [
		'inventario' => 'required',
		'descripcion' => 'required',
		'area_asignada' => 'required',
		'fecha_reporte' => 'required',
		'valor' => 'required',
		'plantel' => 'required',
		'estatus' => 'required',
		'total_bienes' => 'required',
		'monto_bienes' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['inventario','descripcion','area_asignada','fecha_reporte','valor','plantel','estatus','total_bienes','monto_bienes'];



}
