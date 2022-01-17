<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $species
 * @property string $watering_instructions
 * @property string $photo
 * @method static paginate()
 * @method static find(int $id)
 */
class Plant extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'species',
        'watering_instructions',
        'photo'
    ];
}
