<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table = 'forms';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = ['fullname', 'phone', 'city', 'uf', 'bus_father'];

    public static function create(array $array)
    {

    }
}
