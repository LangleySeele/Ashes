<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Character extends Model
{
    //
    use Searchable;
    protected $fillable=['name','last_name','avatar','epithet','race','gender','height','age','weapons','affiliation','description'];
    
    public function scopeName($query, $name)
    {
        if (trim($name) != "")
        {
            $query->where(\DB::raw("CONCAT(name, ' ', epithet)"), "LIKE", "%$name%");
        }
    }
}
