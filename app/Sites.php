<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sites extends Model
{
    public function scopeDetail($sites)
    {
        foreach ($sites as $site):
            echo $site->url . "\n";
        endforeach;
    }
}
