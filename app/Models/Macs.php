<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Macs extends Model
{
    use HasFactory;
    protected $table = 'macs';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'price', 'color', 'picture', 'description', 'created_at', 'updated_at'];

}
