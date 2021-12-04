<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Text extends Model
{
    use HasFactory;
    protected $table = "texts";
    public $timestamps = false;

    public function block()
    {
        return $this->hasOne(Block::class,'id','block_id');
    }

}
