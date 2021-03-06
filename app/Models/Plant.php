<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property string $species
 * @property string $watering_instructions
 * @property string $photo
 * @method static paginate()
 * @method static find(int $id)
 * @method static orderby(string $string, string $string1)
 */
class Plant extends Model
{
    use HasFactory,SoftDeletes;

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
