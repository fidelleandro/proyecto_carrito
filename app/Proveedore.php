<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $name
 * @property $telefono
 * @property $direccion
 * @property $email
 * @property $nombre_representante
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    
    static $rules = [
		'name' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','telefono','direccion','email','nombre_representante'];



}
