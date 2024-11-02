<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstiloArte
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 * @property $delete_at
 *
 * @property ObraArte[] $obraArtes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EstiloArte extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'delete_at'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function obraArtes()
    {
        return $this->hasMany(\App\Models\ObraArte::class, 'id', 'estilo_artes_id');
    }
    
}
