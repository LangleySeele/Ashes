<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Dialog extends Model
{
    //
    use Searchable;
    protected $fillable=['escena','ch_id','dialogo'];

    public function character()
    {
        return $this->belongsTo(Profession::class, 'ch_id', 'name');
    }
}
