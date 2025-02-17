<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $connection = 'mysql';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'nombre',
        'precio',
        'tipo'
    ];

}