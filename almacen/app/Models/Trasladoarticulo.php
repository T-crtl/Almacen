<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trasladoarticulo extends Model
{
    static $rules = [
        'numInv' => 'required',
        'nominaAnterior' => 'required',
		'nominaNuevo' => 'required',
		'plantelID' => 'required',
		'firma' => 'required',
		'observaciones' => 'required',
		'fechaTraslado' => 'required',
		'documento' => 'required',
    ];
    protected $perPage = 20;

    protected $fillable = ['numInv','nominaAnterior','nominaNuevo','plantelID','firma','observaciones','fechaTraslado','documento'];

	/*public function cons()
	{
		return $this->hasOne('App\Models\Peopledatabase', 'id', 'resguardatario');
	}*/
	public function equipo()
	{
		return $this->hasOne('App\Models\Equipo', 'numInv', 'numInv');
	}
	public function personalA()
	{
		return $this->hasOne('App\Models\Peopledatabase', 'nomina', 'nominaAnterior');
	}
	public function personalN()
	{
		return $this->hasOne('App\Models\Peopledatabase', 'nomina', 'nominaNuevo');
	}
    public function campus()
	{
		return $this->hasOne('App\Models\Campus', 'id', 'plantelID');
	}
}
