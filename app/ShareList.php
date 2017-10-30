<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShareList extends Model
{
    //
    protected $table = "playlist";

    protected $fillable = [
        'name', 'platform', 'link', 'list_id'
    ];
}
