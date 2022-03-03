<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Product extends Model
{
    use HasFactory, Sortable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    protected $fillable = [
        'EAN13',
        'Nosaukums',
        'Atlikums',
        'Pašizmaksa',
        'Cena',
    ];

    public $sortable = [
        'EAN13',
        'Nosaukums',
        'Atlikums',
        'Pašizmaksa',
        'Cena',
    ];

}
