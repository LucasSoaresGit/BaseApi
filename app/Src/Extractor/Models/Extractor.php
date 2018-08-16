<?php

namespace Src\Extractor\Models;

use Illuminate\Database\Eloquent\Model;

class Extractor extends Model
{
    protected $table = 'extractor';

    public $fillable = ["url"];
}
