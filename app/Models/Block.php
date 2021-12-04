<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Block extends Model
{
    use HasFactory;
    protected $table = "blocks";
    public $timestamps = false;

    public function text()
    {
        return $this->hasMany(Text::class);
    }

    public function textByLang($lang)
    {

        foreach ($this->text as $text)
        {
            if ($text->lang == $lang)
                return $text;
        }
    }
}
