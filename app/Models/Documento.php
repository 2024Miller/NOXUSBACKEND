<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model

{
    protected $table ='documento';
    public $timestamps = false;
    use HasFactory;
}
