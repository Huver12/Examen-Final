<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Exposicione
 *
 * @property $id
 * @property $nombre
 * @property $ubicacion
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 * @property $obra_artes_id
 *
 * @property ObraArte $obraArte
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Exposicione extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'ubicacion', 'obra_artes_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function obraArte()
    {
        return $this->belongsTo(\App\Models\ObraArte::class, 'obra_artes_id', 'id');
    }
    
}
