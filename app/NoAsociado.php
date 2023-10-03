<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NoAsociado
 *
 * @property $id
 * @property $primer_nombre
 * @property $segundo_nombre
 * @property $primer_apellido
 * @property $segundo_apellido
 * @property $telefono
 * @property $dpi
 * @property $nit
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class NoAsociado extends Model
{
    
    static $rules = [
		'primer_nombre' => 'required',
		'segundo_nombre' => 'required',
		'primer_apellido' => 'required',
		'segundo_apellido' => 'required',
		'telefono' => 'required',
		'dpi' => 'required',
		'nit' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','telefono','dpi','nit'];



}
