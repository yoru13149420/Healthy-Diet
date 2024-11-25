<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    protected $table = 'town'; // 指定表名稱
    protected $primaryKey = 'town_id'; // 指定主鍵名稱
    public $timestamps = false;

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'city_id');
    }
}
